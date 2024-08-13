<?php  
	$mc=isset($_GET['motcle'])?$_GET['motcle']:"";
		$requete="SELECT * FROM formation WHERE designation LIKE '%$mc%'";	

	
	$resultat=$pdo->query($requete);
