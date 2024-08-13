<?php  
	$mc=isset($_GET['motcle'])?$_GET['motcle']:"";
		$requete="SELECT * FROM inscription WHERE id LIKE '%$mc%'";	

	
	$resultat=$pdo->query($requete);
