<?php  
	$mc=isset($_GET['motcle'])?$_GET['motcle']:"";
	$requete="SELECT * FROM apprenant WHERE nom_complet LIKE '%$mc%' ORDER BY dates DESC";	
	
	$resultat=$pdo->query($requete);
