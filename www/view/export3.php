<?php  
	require_once('../bdd/connexion.php');

	$requete="SELECT * FROM inscription";	
	$resultat=$pdo->query($requete);

	// Pour Exporter
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment; Filename=MyData.xls");
?>
 <h2 align="center">INSCRIPTION DES APPRENANTS</h2>
 <table border="1">
                                       <thead>
                                <tr>
                                    <th>ID</th><th>CODE-APPRENANT</th><th>FORMATION</th><th>MONTANT A PAYER</th><th>SESSION</th><th>DATE-INSCRIPTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($et=$resultat->fetch()){?>
                                <tr>
                                <td><?php  echo($et['id'])?></td>
                                <td><?php  echo($et['code_apprenant'])?></td>
                                <td><?php  echo($et['formation'])?></td>
                                <td><?php  echo($et['montant_a_payer'])?>$</td>
                                <td><?php  echo($et['session'])?></td>
                                <td><?php  echo($et['date_inscription'])?></td>
                                             
                                             </tr>
                                               <?php
                                               
                                            }
                                                ?>
                                        </tbody>
                                    </table>
    
      