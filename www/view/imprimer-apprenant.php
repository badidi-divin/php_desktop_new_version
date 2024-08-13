<?php
	session_start();
	require_once '../bdd/connexion.php';
	require_once('../model/imprimer-apprenant.php');
	$id=1;
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
		<div align="center">
			<img src="../image/10.JPG" width="150px" height="150px">
		</div>
		<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						LISTE DES APPRENANTS <a href="apprenant.php">Retour</a>
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>CODE</th><th>NOM</th><th>POST-NOM</th><th>PRENOM</th><th>SEXE</th><th>TELEPHONE</th><th>EMAIL</th><th>ADRESSE</th><th>DATE</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$ps->fetch()){?>
								<tr>
								<td><?php  echo($et['code'])?></td>
								<td><?php  echo($et['nom'])?></td>
								<td><?php  echo($et['postnom'])?></td>
								<td><?php  echo($et['prenom'])?></td>
								<td><?php  echo($et['sexe'])?></td>
								<td><?php  echo($et['tel'])?></td>
								<td><?php  echo($et['email'])?></td>
								<td><?php  echo($et['adresses'])?></td>
								<td><?php  echo($et['dates'])?></td>
								<!--liens -->
											</tr>	
									<?php $id++; } ?>	
							</tbody>
						</table>
						<div class="text-center">
							<a onclick="window.print();">clic</a>
						</div>	
					</div>
				</div>	
			</div>
		
</body>
</html>
