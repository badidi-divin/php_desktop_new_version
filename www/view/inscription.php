<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/inscription.php';
	
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
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a">CREER UN COMPTE</h3>
			<a href="Profile.php">Retour Profile</a>
		</div>
		<div class="panel-body">
			<form method="post" action="">
				<div class="form-group">
					<label class="control-label">
						Nom d'utilisateur:
					</label>
					<input type="text" name="nom" required="required" class="form-control" >
				</div>
			  <div class="form-group">
					<label class="control-label">
						Mot de Passe:
					</label>
					<input type="password" name="password" required="required" class="form-control" >
			  </div>
			  <div class="form-group">
			  	<label class="control-label">
						Rôle:
					</label>
					<select name="role" class="form-control" autocomplete="off" required="required" >
						<option value="Admin">
							Admin
						</option>
						<option value="Secretaire">
							Secretaire
						</option>
					</select>
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-danger" name="formconnect">Créer un Compte</button>
				</div>
				<a href="connexion.php">Se Connecter?</a>
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
