<div class="container">
    <div class="row">
            <div class="row">
                <?= statsAdmin::stats("red","$nbAdmin","Administrateurs","person-add","admin") ?>
                <?= statsAdmin::stats("green","$nbChef","Chefs de formations","person-add","chef") ?>
                <?= statsAdmin::stats("orange","$nbUser","Utilisateurs","person-add","user") ?>
                <?= statsAdmin::stats("purple","$nbPresta","Prestataires","person-add","presta") ?>
                <?= statsAdmin::stats("blue","$nbForm","Formations","stats-bars","form") ?>

<div class="modal fade" id="admin" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Liste des administrateurs</h4>
             </div>
             <div class="modal-body">
                 <table class="table table-hover">
                 <thead>
                 <tr>
                 <th>Nom</th>
                 <th>Prénom</th>
                 <th>Mail</th>
                 <th>Nb Jour</th>
                 </tr>
                 </thead>
                 <?php 
                 foreach ($listAdmin as $key => $value) {
                        echo '<tbody>
                        			<tr>
                                         <td>'.$value['nom'].'</td>
                                         <td>'.$value['prenom'].'</td>
                                         <td>'.$value['mail'].'</td>
                                         <td>'.$value['NbJour'].'</td>
                                    </tr>
                               </tbody>';
                                               	}
                 ?>
                   </table>  
            </div>
        </div> 
    </div>
</div>

<div class="modal fade" id="chef" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Liste chefs</h4>
             </div>
             <div class="modal-body">
                 <table class="table table-hover">
                 <thead>
                 <tr>
                 <th>Nom</th>
                 <th>Prénom</th>
                 <th>Mail</th>
                 <th>Nb Jour</th>
                 </tr>
                 </thead>
                 <?php 
                 foreach ($listChef as $key => $value) {
                        echo '<tbody>
                                    <tr>
                                         <td>'.$value['nom'].'</td>
                                         <td>'.$value['prenom'].'</td>
                                         <td>'.$value['mail'].'</td>
                                         <td>'.$value['NbJour'].'</td>
                                    </tr>
                               </tbody>';
                                                }
                 ?>
                   </table>  
            </div>
        </div> 
    </div>
</div>

<div class="modal fade" id="user" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Liste des utilisateurs</h4>
             </div>
             <div class="modal-body">
                 <table class="table table-hover">
                 <thead>
                 <tr>
                 <th>Nom</th>
                 <th>Prénom</th>
                 <th>Mail</th>
                 <th>Nb Jour</th>
                 </tr>
                 </thead>
                 <?php 
                 foreach ($listUser as $key => $value) {
                        echo '<tbody>
                                    <tr>
                                         <td>'.$value['nom'].'</td>
                                         <td>'.$value['prenom'].'</td>
                                         <td>'.$value['mail'].'</td>
                                         <td>'.$value['NbJour'].'</td>
                                    </tr>
                               </tbody>';
                                                }
                 ?>
                   </table>  
            </div>
        </div> 
    </div>
</div>

<div class="modal fade" id="presta" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Liste des prestataires</h4>
             </div>
             <div class="modal-body">
                 <table class="table table-hover">
                 <thead>
                 <tr>
                 <th>Raison sociale</th>
                 <th>Adresse</th>
                 </tr>
                 </thead>
                 <?php 
                 foreach ($listPresta as $key => $value) {
                        echo '<tbody>
                                    <tr>
                                         <td>'.$value['raison_s'].'</td>
                                         <td>'.$value['numero']." ".$value['rue']." ".$value['commune']." ".$value['code_postale'].'</td>
                                    </tr>
                               </tbody>';
                                                }
                 ?>
                   </table>  
            </div>
        </div> 
    </div>
</div>

<div class="modal fade" id="form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Liste des formations</h4>
             </div>
             <div class="modal-body">
                 <table class="table table-hover">
                 <thead>
                 <tr>
                 <th>Libelle</th>
                 <th>Date</th>
                 <th>Contenu</th>
                 </tr>
                 </thead>
                 <?php 
                 foreach ($listForm as $key => $value) {
                        echo '<tbody>
                                    <tr>
                                         <td>'.$value['libelle'].'</td>
                                         <td>'.$value['date_f'].'</td>
                                         <td>'.$value['contenu'].'</td>
                                    </tr>
                               </tbody>';
                                                }
                 ?>
                   </table>  
            </div>
        </div> 
    </div>
</div>
            </div>
    </div>
</div>