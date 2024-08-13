<?php  
	$id=isset($_GET['id'])?$_GET['id']:"";
	
	$requete="SELECT * FROM etudiant WHERE matricule='$id'";	

	
	$resultat=$pdo->query($requete);

	$userinfo=$resultat->fetch();
