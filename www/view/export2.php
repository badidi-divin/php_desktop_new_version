<?php  
	require_once('../bdd/connexion.php');

	$requete="SELECT * FROM apprenant";	
	$resultat=$pdo->query($requete);

	// Pour Exporter
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment; Filename=MyData.xls");
?>
 <h2 align="center">LISTE DES APPRENANTS</h2>
 <table border="1">
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
                                             
                                             </tr>
                                               <?php
                                               
                                            }
                                                ?>
                                        </tbody>
                                    </table>
    
      