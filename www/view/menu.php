<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
				</li>
				<?php if ($_SESSION['role']=="Admin") {
					?>
					<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="formation.php">Formation</a>
				</li>
					<?php
				} ?>
				
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="apprenant.php">Apprenant</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="inscription-centre.php">Inscription</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="paiement.php">Paiement</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="bonus.php">Bonus</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter[<?= $_SESSION['nom']; ?>]</a>
				</li>
			</ul>