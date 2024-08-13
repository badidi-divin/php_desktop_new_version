<?php
	session_start();
		if (isset($_GET['export2'])) {
		header("location:export2.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title> 
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.spacer{
				margin-top: 10px;
			}
			.divin{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<?php 	require_once('menu.php'); ?>
		</div>
	<!-- navigation end -->
<!-- navigation end -->
	<?php 
	    require_once("../bdd/connexion.php");
		require_once('../model/selection_apprenant.php');
	?>
			<div class="contenair col-lg-12 col-md-6 divin">
		<div class="panel panel-primary ">
				<div class="panel-heading">
					Rechercher
				</div>
				<div class="panel-body">
			<form method="get" action="" class="form-inline">
						<div class="form-group">
							<label for="propri">Recherche:</label>
							<input type="text" name="motcle" class="form-control" placeholder="Mettez le mot clé..." value="<?php echo $mc ?>">
						</div>
						<button type="submit" class="btn btn-success">
						Rechercher</button>
						&nbsp;&nbsp;
						<a href="ajout-apprenant.php" class="btn btn-primary">Ajouter</a>
						&nbsp;&nbsp;
						<a href="imprimer-apprenant.php" class="btn btn-danger">Imprimer</a>
						&nbsp;&nbsp;
						  <button class="btn btn-success" title="Exporter vers Excel" name="export2">Excel</button>
					</form>
		</div>
			</div>
		<div align="center">

			<h1 style="font-size: 45px;">
				Gestion des Apprenants
			</h1>
		</div>

			<div class="col-md-12 col-xs-12">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<div class="table-responsive table--no-card m-b-30">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>CODE</th><th>NOM</th><th>POST-NOM</th><th>PRENOM</th><th>SEXE</th><th>TELEPHONE</th><th>WHATSAPP</th><th>EMAIL</th><th>ADRESSE</th><th>DATE</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($et['code'])?></td>
								<td><?php  echo($et['nom'])?></td>
								<td><?php  echo($et['postnom'])?></td>
								<td><?php  echo($et['prenom'])?></td>
								<td><?php  echo($et['sexe'])?></td>
								<td>+<?php  echo($et['phone'])?></td>
								<td>+<a href="https://api.whatsapp.com/send?phone=%2B<?= $et['tel']; ?>&text=Bonjour&app_absent=0"><?php  echo($et['tel'])?></a></td>
								<td><a href="mailto:<?php  echo($et['email'])?>"><?php  echo($et['email'])?></a> </td>
								<td><?php  echo($et['adresses'])?></td>
								<td><?php  echo($et['dates'])?></td>
								<!--liens -->
								<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-apprenant.php?id=<?php echo($et['code'])?>" class="btn btn-danger">Supprimer</a></td>
								<td><a href="edit-apprenant.php?id=<?php echo($et['code'])?>" class="btn btn-primary">Editer</a></td>
								<td></td>
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
					</div>
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	</body>
</html>