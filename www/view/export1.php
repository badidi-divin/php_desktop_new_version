<?php  
    $c=1;
	require_once('../bdd/connexion.php');

	$requete="SELECT * FROM formation";	
	$resultat=$pdo->query($requete);

	// Pour Exporter
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment; Filename=MyData.xls");
?>
 <h2 align="center">LISTE DES FORMATIONS</h2>
 <table border="1">
                                        <thead>
                                <tr>
                                <th>ID</th><th>COURS</th><th>MONTANT</th><th>DUREE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  while ($et=$resultat->fetch()){?>
                                <tr>
                                    <td><?php  echo $c;?></td>
                                <td><?php  echo($et['designation'])?></td>
                                <td><?php  echo($et['montant'])?> $</td>
                                <td><?php  echo($et['duree'])?></td>
                                             
                                             </tr>
                                               <?php
                                               $c++;
                                            }
                                                ?>
                                        </tbody>
                                    </table>
    
      