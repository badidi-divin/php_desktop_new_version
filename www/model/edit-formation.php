<?php
	require_once('../bdd/connexion.php');
	$requser=$pdo->prepare("SELECT * FROM formation WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $cours=htmlspecialchars($_POST['cours']);
    $montant=htmlspecialchars($_POST['montant']);
    $duree=htmlspecialchars($_POST['duree']);

	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("UPDATE formation SET designation=?,montant=?,duree=? WHERE id=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($cours,$montant,$duree,$_GET['id']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Modification effectuée avec Succès!')
			</script>
			<script>
				window.open('./formation.php','_self')
			</script>
			<?php

			exit();	
			}
			