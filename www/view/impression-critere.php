<?php
	session_start();
	require_once '../bdd/connexion.php';
	require_once('../model/imprimer-critere.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tableau de Bord</title>
	<link rel="stylesheet" href="../includes/css/bootstrap.css">
	<style type="text/css">
		@page
		{
			size:A4;
			margin:0; 

		}
		#print-btn{
			display: none;
			visibility: none;
		}
		.margetop{
			margin-top: 60px;
		}
		.spacer{
			margin-top: 10px;
		}
		.space{
			margin-top: 70px;
		}
		.spac{
			margin-top: 80px;
		}
		.a{
			text-align:center;
			text-decoration: blink;
		}
	</style>
</head>
<body>
	<!--************************ Header ***********************************-->
	<!-- Navigation -->

			<div class="container headings text-center margetop" >
				<h2 class=" pt-1" style="font-weight: bold;">INSTITUT II KIMBUTA</h2>
				
				
			</div>
		<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						LISTE DES ELEVES
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>MATRICULE</th><th>NOM-COMPLET</th><th>SEXE</th><th>TELEPHONE</th><th>ADRESSE</th><th>OPTION</th><th>CLASSE</th><th>ANNEE-SCOLAIRE</th><th>IMAGE</th>
									<th>DATES</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($et['matricule'])?></td>
								<td><?php  echo($et['nom_complet'])?></td>
								<td><?php  echo($et['sexe'])?></td>
								<td>+<?php  echo($et['telephone'])?></td>
								<td><?php  echo($et['adresse'])?></td>
								<td><?php  echo($et['option_etudiant'])?></td>
								<td><?php  echo($et['promotion_etudiant'])?></td>
								<td><?php  echo($et['annee_scolaire'])?></td>
								<td><img src="../image/<?php  echo($et['image'])?>" width="50px" height="70px"></td>
								<td><?php  echo($et['dates'])?></td>
								<!--liens -->
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
						<div class="text-center">
							<button onclick="window.print();" class="btn btn-primary">Print</button>
						</div>	
					</div>
				</div>	
			</div>
		
</body>
</html>
