<?php 
    require_once('../../bdd/connexion.php');
    require_once('../../model/select-carte.php');

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>INSTITUT D'ISANGI</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="profile-bottom">
        INSTITUT D'ISANGI
        <div class="profile-infos">
           <img src="../../image/<?php echo $userinfo['image'] ?>" width="150px" height="120px">
          <div class="main-infos">

            <h3 class="name"><?php echo $userinfo['nom_complet'] ?></h3>
          </div>
          <p class="email"><?php echo $userinfo['promotion_etudiant'] ?></p>
          <p class="email"><?php echo $userinfo['option_etudiant'] ?></p>
          <p class="ville"><ion-icon name="location"></ion-icon><?php echo $userinfo['adresse'] ?></p>
        </div>

        <div class="profile-stats">
          <div class="stat-item">
            <p class="stat"><?php echo $userinfo['annee_scolaire'] ?></p>
            <p class="grey">Année - Scolaire</p>
          </div>
          <div class="stat-item">
            <p class="stat"><?php echo $userinfo['matricule'] ?></p>
            <p class="grey">Matricule</p>
          </div>
          <div class="stat-item">
            <p class="stat"><?php echo $userinfo['sexe'] ?></p>
            <p class="grey">Sexe</p>
          </div>
        </div>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
