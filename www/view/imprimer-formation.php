<?php
	session_start();
	require_once '../bdd/connexion.php';
	require_once('../model/imprimer-formation.php');
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
						LISTE DES FORMATIONS <a href="formation.php">Retour</a>
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>NUMERO</th><th>COURS</th><th>MONTANT</th><th>DUREE</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$ps->fetch()){?>
								<tr>
								<td><?php  echo $id; ?></td>
								<td><?php  echo($et['designation'])?></td>
								<td><?php  echo($et['montant'])?> $</td>
								<td><?php  echo($et['duree'])?></td>
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
