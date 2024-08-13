<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/Edit-apprenant.php';
	
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
			<?php require_once('menu.php'); ?>
		</div>
	<!-- navigation end -->
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a">EDITION</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
			  <div class="form-group">
					<label class="control-label">
						NOM:
					</label>
					<input type="text" name="nom" required="required" class="form-control" value="<?= $userinfo['nom'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						POST-NOM:
					</label>
					<input type="text" name="postnom" required="required" class="form-control" value="<?= $userinfo['postnom'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						PRENOM:
					</label>
					<input type="text" name="prenom" required="required" class="form-control" value="<?= $userinfo['prenom'] ?>">
			  </div>
			   <div class="form-group">
					<label class="control-label">
						SEXE:
					</label>
					<select name="sexe" class="form-control" autocomplete="off" required="required">
						<option value="M">
							M
						</option>
						<option value="F">
							F
						</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						TELEPHONE:
					</label>
					<input type="number" name="phone" required="required" class="form-control" value="<?= $userinfo['phone'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						WHATSAPP:
					</label>
					<input type="number" name="tel" required="required" class="form-control" value="<?= $userinfo['tel'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						EMAIL:
					</label>
					<input type="email" name="email" required="required" class="form-control" value="<?= $userinfo['email'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						ADRESSE COMPLETE:
					</label>
					<input type="text" name="adresse" required="required" class="form-control" value="<?= $userinfo['adresses'] ?>">
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
