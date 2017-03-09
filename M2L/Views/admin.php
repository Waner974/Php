<div class="container">
    <div class="row">
        <div class="col-md-12">
                <?= statsAdmin::stats("red","$nbAdmin","Administrateurs","person-add","admin") ?>
                <?= statsAdmin::stats("green","$nbChef","Chefs de formations","person-add","chef") ?>
                <?= statsAdmin::stats("orange","$nbUser","Utilisateurs","person-add","user") ?>
                <?= statsAdmin::stats("purple","$nbPresta","Prestataires","person-add","presta") ?>
                <?= statsAdmin::stats("blue","$nbForm","Formations","stats-bars","form") ?>
        </div>

    <div class="example-modal">
        <div class="modal" id="admin">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal -->
                
    <div class="example-modal">
        <div class="modal" id="chef">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal --> 
                
    <div class="example-modal">
        <div class="modal" id="user">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal -->
                
    <div class="example-modal">
        <div class="modal" id="presta">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal -->

    <div class="example-modal">
        <div class="modal" id="form">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal -->
    </div>
</div>