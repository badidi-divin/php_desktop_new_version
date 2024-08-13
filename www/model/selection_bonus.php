<?php  
	$mc=isset($_GET['motcle'])?$_GET['motcle']:"";
		$requete="SELECT * FROM bonus WHERE code_apprenant LIKE '%$mc%' ORDER BY nombre_inscript DESC";	

	
	$resultat=$pdo->query($requete);
