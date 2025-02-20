<?php
	require_once('../bdd/connexion.php');
	$requser=$pdo->prepare("SELECT * FROM paiement WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $code_apprenant=htmlspecialchars($_POST['code_apprenant']);
    $montant_payer=htmlspecialchars($_POST['montant_payer']);

    $requser=$pdo->prepare("SELECT * FROM inscription WHERE code_apprenant=?");
	$requser->execute(array($code_apprenant));
	$userinfo=$requser->fetch();

	if ($userinfo['montant_a_payer']<$montant_payer) {
		?>
		<script type="text/javascript">
			alert("Le Montant payer doit être inférieur ou égal au montant à payer")
		</script>
		<?php
	}else{
		$reste=$userinfo['montant_a_payer']-$montant_payer;
		// Modification
		$ps=$pdo->prepare("UPDATE inscription SET montant_a_payer=? WHERE code_apprenant=?");
		//Pour bien recupere les données on crée un table de parametre
		$params=array($reste,$code_apprenant);
		//Execution de la requête par leur paramètre en ordre 
		$ps->execute($params);
		//Création de l'objet prepare et envoie de la requête
		$ps=$pdo->prepare("UPDATE paiement SET code_apprenant=?,formation=?,montant_payer=?,session=? WHERE id=?");
		//Pour bien recupere les données on crée un table de parametre
		$params=array($code_apprenant,$userinfo['formation'],$montant_payer,$userinfo['session'],$_GET['id']);
		//Execution de la requête par leur paramètre en ordre 
		$ps->execute($params);
		// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Modification effectuée avec Succès!')
			</script>
			<script>
				window.open('./paiement.php','_self')
			</script>
			<?php

			exit();	
			}
	}

	