<?php
require_once('../bdd/connexion.php');

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $code_apprenant=htmlspecialchars($_POST['code_apprenant']);
    $formation=htmlspecialchars($_POST['formation']);
    $session=htmlspecialchars($_POST['session']);

    $requser=$pdo->prepare("SELECT * FROM formation WHERE designation=?");
	$requser->execute(array($formation));
	$userinfo=$requser->fetch();

	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO inscription(code_apprenant,formation,montant_a_payer,session)VALUES(?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($code_apprenant,$formation,$userinfo['montant'],$session);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	// **********Calcul du Bonus***********************
	// Vérification si l'utilisateur existe vraiment
	$requiser=$pdo->prepare("SELECT * FROM bonus WHERE code_apprenant=?");
	$requiser->execute(array($code_apprenant));
	// rowCount permet de compter le nombre saisie par le user
	$userexist=$requiser->rowCount();
	if($userexist==1) {
	$userinfo=$requiser->fetch();
	$nbre=$userinfo['nombre_inscript']+=1;
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("UPDATE bonus SET nombre_inscript=? WHERE code_apprenant=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($nbre,$code_apprenant);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	
	}else{
		$ps=$pdo->prepare("INSERT INTO bonus SET code_apprenant=?,nombre_inscript=?");
		//Pour bien recupere les données on crée un table de parametre
		$params=array($code_apprenant,1);
		//Execution de la requête par leur paramètre en ordre 
		$ps->execute($params);
	}
	
	?>
			<script type="text/javascript">
				alert('Enregistrement effectuée avec Succès!')
			</script>
			<script>
				window.open('./inscription-centre.php','_self')
			</script>
			<?php

			exit();	
			}
			