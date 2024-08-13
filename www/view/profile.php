<?php
	session_start();
	require_once('../bdd/connexion.php');
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
			.space{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
			body{
				  color: #999;
				  background-image: url(../image/22.jpg);
		
				}
	</style>
	<body style="color: black;">
		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<?php 	require_once('menu.php'); ?>
		</div>
	<!-- navigation end -->

		
		
		<div align="center" style="	padding-top: 150px;">

			<h1 style="font-size: 45px;">
				Bienvenue  <?php echo $_SESSION['nom']; ?>(<?php echo $_SESSION['role']; ?>)
				
			</h1>
			<a href="inscription.php">CREATE NEW ACCOUNT</a>
		</div>

		<div align="center">
			<h1 style="font-weight:bold;">RAPPORT</h1>

			<h3 style="background-color:white; font-size: 30px;font-weight: bold;">
				 (<?php
                $nblmd=$pdo->prepare('SELECT * FROM formation');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?>)Formation
             &nbsp;
			(<?php
                $nblmd=$pdo->prepare('SELECT * FROM inscription');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?>)Inscription
                                &nbsp;
                               (<?php
                $nblmd=$pdo->prepare('SELECT * FROM paiement');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?>)Paiement
                               &nbsp;
                	 (<?php
                $nblmd=$pdo->prepare('SELECT * FROM apprenant');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?>)Apprenant
             &nbsp;
                              

            </h3>
		</div>
	<!-- Circulation de la page -->

	</body>
</html>