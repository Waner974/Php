<div class="container">
    <div class="row">

            <?= statsAdmin::stats("blue", "$nbUser", "Utilisateur(s) affecté(s)","person-add","user") ?>
            <?= statsAdmin::stats("orange", "$nbDmd", "Demande(s)en attente(s)","android-time","dmd") ?>

            <div class="col-md-11">

        <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Formations proposées</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                      <tr>
                                        <th>Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
                                        <th>Coût</th>
                                        <th>Plus d'info</th>
                                        <th>Suivre</th>
                                      </tr>
                                    </thead>
                            <?php
                            if (isset($Form)){
                               foreach ($Form as $key => $value)
                {

                            $Suivre = '<form method="post">
                                    <button type="submit" class="btn btn-xs" name="Suivre" >
                                        <span><i class="fa fa-mail-forward"></i></span>
                                    </button>  
                                    <input name="idForm" type="hidden" value="'.$value['id_f'].'" >
                                </form>';
                        echo('
                            <tbody>
                                <tr>
                                   <td>'.$value["libelle"].'</td>
                                   <td>'.$value['date_d'].' - '.$value['date_f'].'</td>
                                   <td>'.$value['NbJour'].' Jour(s)</td>
                                   <td>'.$value['credits'].' Credit(s)</td>
                                   <td>
                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#'.$value['id_f'].'"><i class="fa fa-plus"></i></button>
                                    <div class="modal fade" id='.$value['id_f'].' role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">'.$value['libelle'].'</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modalContent">Date : ' . $value['date_d'] . ' - ' . $value['date_f'] . '</h4>
                                                    <h4 class="modalContent">Durée : ' . $value['NbJour'] . ' Jour(s)</h4>
                                                    <h4 class="modalContent">Coût : '.$value['credits'].' Crédit(s)</h4>
                                                    <h4 class="modalContent">Adresse : '.$value['numero'].' '.$value['rue'].' '.$value['commune'].' '.$value['code_postale'].'</h4>
                                                    <h4 class="modalContent">Description:'.$value['contenu'].'</h4>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td>'.$Suivre.'</td>
                                </tr>
                            </tbody>');
                }
                            }
                            else{
                                echo('<tbody><tr><td>Aucune formation</td></tr></tbody>');

                            }
                            ?>
                        </table>
                    </div>
            </div>
            <!-- /.box-body -->
          </div>
                

                         <div class="box box-warning collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Formations en attente de validation</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                      <tr>
                                        <th>Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
                                        <th>Coût</th>
                                        <th>Plus d'info</th>
                                        <th>Etat</th>
                                      </tr>
                                    </thead>
                            <?php
                            if (isset($FormAtt)){
                               foreach ($FormAtt as $key => $value)
                                {

                            echo('
                            <tbody>
                                <tr>
                                   <td>'.$value["libelle"].'</td>
                                   <td>'.$value['date_d'].' - '.$value['date_f'].'</td>
                                   <td>'.$value['NbJour'].' Jour(s)</td>
                                   <td>'.$value['credits'].' Credit(s)</td>
                                   <td>
                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#'.$value['id_f'].'"><i class="fa fa-plus"></i></button>
                                    <div class="modal fade" id='.$value['id_f'].' role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">'.$value['libelle'].'</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modalContent">Du : ' . $value['date_f'] . ' au :' . $value['date_f'] . '</h4>
                                                    <h4 class="modalContent">Durée : ' . $value['NbJour'] . ' Jour(s)</h4>
                                                    <h4 class="modalContent">Coût : '.$value['credits'].' Crédit(s)</h4>
                                                    <h4 class="modalContent">Adresse : '.$value['numero'].' '.$value['rue'].' '.$value['commune'].' '.$value['code_postale'].'</h4>
                                                    <h4 class="modalContent">Description:'.$value['contenu'].'</h4>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td><span class="label label-warning">'.$value['etat'].' <i class="glyphicon glyphicon-time"></i></span></td>
                                </tr>
                            </tbody>');
                } }
                else{
                    echo('<tbody><tr><td>Aucune formation en attente</td></tr></tbody>');

                }
                            ?>
                        </table>
                    </div>
            </div>
            <!-- /.box-body -->
          </div>

         <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Historique</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                      <tr>
                                        <th>Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
                                        <th>Coût</th>
                                        <th>Plus d'info</th>
                                        <th>Etat</th>
                                      </tr>
                                    </thead>
                            <?php
                            if (isset($FormHisto)) {
                                foreach ($FormHisto as $key => $value) {
                                    if ($value['etat'] == "Validé") {
                                        $etat = '<span class="label label-success">' . $value['etat'] . ' <i class="glyphicon glyphicon-ok"></i></span>';
                                    } elseif ($value['etat'] == "Refusé") {
                                        $etat = '<span class="label label-danger">' . $value['etat'] . ' <i class="glyphicon glyphicon-remove"></i></span>';
                                    }
                                    echo('
                            <tbody>
                                <tr>
                                   <td>' . $value["libelle"] . '</td>
                                   <td>'.$value['date_d'].' - '.$value['date_f'].'</td>
                                   <td>'.$value['NbJour'].' Jour(s)</td>
                                   <td>'.$value['credits'].' Credit(s)</td>
                                   <td>
                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#' . $value['id_f'] . '"><i class="fa fa-plus"></i></button>
                                    <div class="modal fade" id=' . $value['id_f'] . ' role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">' . $value['libelle'] . '</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modalContent">Du : ' . $value['date_f'] . ' au :' . $value['date_f'] . '</h4>
                                                    <h4 class="modalContent">Durée : ' . $value['NbJour'] . ' Jour(s)</h4>
                                                    <h4 class="modalContent">Coût : '.$value['credits'].' Crédit(s)</h4>
                                                    <h4 class="modalContent">Adresse : '.$value['numero'].' '.$value['rue'].' '.$value['commune'].' '.$value['code_postale'].'</h4>
                                                    <h4 class="modalContent">Description:'.$value['contenu'].'</h4>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td>' . $etat . '</td>
                                </tr>
                            </tbody>');

                                }
                            }

                            else{
                                echo('<tbody><tr><td>Aucune formation antérieure</td></tr></tbody>');

                            }
                ?>
                        </table>
                    </div>  
            </div>
            <!-- /.box-body -->
          </div>
</div>


        <div class="modal" id="user">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4>Liste des utilisateurs</h4>
              </div>
              <div class="modal-body">
                    <div class="table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Mail</th>
                                <th>Formations</th>
                            </tr>
                            <?php
                            if ($nbUser > 0)
                            {
                                foreach ($user as $key => $value)
                                {
                                    echo
                                        '<tbody>
                            <tr>
                            <td>' . $value['nom'] . '</td>
                            <td>' . $value['prenom'] . '</td>
                            <td>' . $value['mail'] . '</td>
                            <td><a href="' . BASE_URL . '/formationUser?id=' . $value['id_s'] . '" class="glyphicon glyphicon-list"></a></td>
                            </tr>
                            </tbody>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
              <div class="modal-footer">
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

                <div class="modal" id="dmd">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4>Liste des demandes qui nécessite votre attention</h4>
              </div>
              <div class="modal-body">
                    <div class="table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Formation</th>
                                <th>Date</th>
                                <th>Durée</th>
                                <th>Jour restant</th>
                                <th><i class="glyphicon glyphicon-cog"></th>
                            </tr>
                            <?php
                            if ($nbDmd > 0)
                            {
                                foreach ($Dmd as $key => $value)
                                {
                                    echo
                                        '<tbody>
                            <tr>
                            <td>' . $value['nom'] . '</td>
                            <td>' . $value['prenom'] . '</td>
                            <td>'.$value['libelle'].'</td>
                            <td>'.$value['date_f'].'</td>
                            <td>'.$value['durée'].'</td>
                            <td>'.$value['NbJour'].'</td>
                            <td>TODO</td>
                            </tr>
                            </tbody>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
              <div class="modal-footer">
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>

