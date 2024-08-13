<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/editer-etudiant.php';
	$sexe=$userinfo['sexe'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
	<style type="text/css">
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
	<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter</a>
				</li>
			</ul>
		</div>
	<!-- navigation end -->
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a">EDITION DE L'ETUDIANT</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="">
				<div class="form-group">
					<label class="control-label">
						MATRICULE:
					</label>
					<input type="text" name="matricule" required="required" class="form-control" value="<?= $userinfo['matricule']; ?>" readonly="readonly">
				</div>
			  <div class="form-group">
					<label class="control-label">
						NOM COMPLET:
					</label>
					<input type="text" name="nom_complet" required="required" class="form-control" value="<?= $userinfo['nom_complet']; ?>">
			  </div>
			   <div class="form-group">
					<label class="control-label">
						SEXE:
					</label>
					<select name="sexe" class="form-control" autocomplete="off" required="required" >
						<option value="M" <?php if($sexe=="M") echo "selected" ?>>
							M
						</option>
						<option value="F" <?php if($sexe=="F") echo "selected" ?>>
							F
						</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						ADRESSE:
					</label>
					<input type="text" name="adresse" required="required" class="form-control" value="<?= $userinfo['adresse'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						TELEPHONE:
					</label>
					<input type="number" name="telephone" required="required" class="form-control" value="<?= $userinfo['telephone'] ?>">
			  </div>
			  <div class="form-group">
			  		<label class="control-label">
						OPTION:
					</label>
					<select name="option_etudiant" class="form-control" autocomplete="off" required="required">
						<option value="Aucune">
							Aucune
						</option>
						<option value="Latin-Philo">
							Latin-Philo
						</option>
						<option value="Math-physique">
							Math-physique
						</option>
						<option value="Bio-chimie">
							Bio-chimie
						</option>
					</select>
				</div>
				 <div class="form-group">
			  		<label class="control-label">
						CLASSE:
					</label>
					<select name="promotion_etudiant" class="form-control" autocomplete="off" required="required">
						<option value="7ème">
							7ème
						</option>
						<option value="8ème">
							8ème
						</option>
						<option value="1ère">
							1ère
						</option>
						<option value="2ème">
							2ème
						</option>
						<option value="3ème">
							3ème
						</option>
						<option value="4ème">
							4ème
						</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">
						ANNEE SCOLAIRE:
					</label>
					<select name="annee_scolaire" class="form-control" autocomplete="off" required="required">
						<option value="2020-2021">
							2020-2021
						</option>
						<option value="2021-2022">
							2021-2022
						</option>
						<option value="2022-2023">
							2022-2023
						</option>
					</select>
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Editer</button>
				</div>
			</form>
			<?php
			if (isset($erreur)) {
				echo "<font color='red'>".$erreur."</font>";
			}
		?>
		</div>
	</div>
</div>
</body>
</html>
