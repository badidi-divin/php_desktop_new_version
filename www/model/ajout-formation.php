<?php
require_once('../bdd/connexion.php');

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $cours=htmlspecialchars($_POST['cours']);
    $montant=htmlspecialchars($_POST['montant']);
    $duree=htmlspecialchars($_POST['duree']);

	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO formation(designation,montant,duree)VALUES(?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($cours,$montant,$duree);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Enregistrement effectuée avec Succès!')
			</script>
			<script>
				window.open('./formation.php','_self')
			</script>
			<?php

			exit();	
			}
			