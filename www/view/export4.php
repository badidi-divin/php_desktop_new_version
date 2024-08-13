<?php  
	require_once('../bdd/connexion.php');

	$requete="SELECT * FROM paiement";	
	$resultat=$pdo->query($requete);

	// Pour Exporter
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment; Filename=MyData.xls");
?>
 <h2 align="center">RAPPORT DE PAIEMENTS</h2>
 <table border="1">
                                     <thead>
                                <tr>
                                    <th>ID</th><th>CODE-APPRENANT</th><th>FORMATION</th><th>MONTANT-PAYE</th><th>RESTE</th><th>SESSION</th><th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($et=$resultat->fetch()){?>
                                <tr>
                                <td><?php  echo($et['id'])?></td>
                                <td><?php  echo($et['code_apprenant'])?></td>
                                <td><?php  echo($et['formation'])?></td>
                                <td><?php  echo($et['montant_payer'])?> $</td>

                                <td><?php  
                                if ($et['reste']==0) {
                                    ?>
                                    <a href="#" class="btn btn-success">Aucune dette</a>
                                <?php }else{
                                    echo($et['reste']."$");     
                                }?>
                                </td>
                                <td><?php  echo($et['session'])?> </td>
                                <td><?php  echo($et['date_paie'])?></td>
                                             
                                             </tr>
                                               <?php
                                               
                                            }
                                                ?>
                                        </tbody>
                                    </table>
    
      