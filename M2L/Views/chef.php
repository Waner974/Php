<div class="container">
    <div class="row">

            <?= statsAdmin::stats("blue", "$nbUser", "Utilisateur(s) affecté(s)","person-add","user") ?>
            <?= statsAdmin::stats("orange", "$nbDmd", "Demande(s)en attente(s)","android-time","dmd") ?>

            <div class="col-md-10">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Liste des formations</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                      <tr>
                                        <th>Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
                                        <th>Plus d'info</th>
                                        <th>Suivre</th>
                                      </tr>
                                    </thead>
                            <?php
                            if (isset($Form)){
                               foreach ($Form as $key => $value)
                {

                            $Suivre = '<form method="post">
                                    <button type="submit" class="btn" name="Suivre" >
                                        <span>Suivre</span>
                                    </button>  
                                    <input name="idForm" type="hidden" value="'.$value['id_f'].'" >
                                </form>';
                        echo('
                            <tbody>
                                <tr>
                                   <td>'.$value["libelle"].'</td>
                                   <td>'.$value['date_d'].' - '.$value['date_f'].'</td>
                                   <td>'.$value['NbJour'].' Jour(s)</td>
                                   <td>
                                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#'.$value['id_f'].'">+</button>
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
                                                    <h4 class="modalContent">Adresse : todo</h4>
                                                    <h4 class="modalContent">Description: <h5>' . $value['contenu'] . '</h5></h4>
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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Liste des formations en attente de validation</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                      <tr>
                                        <th>Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
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
                                   <td>
                                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#'.$value['id_f'].'">+</button>
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
                                                    <h4 class="modalContent">Adresse : <h5 class="modalContent">todo</h5></h4>
                                                    <h5 class="modalContent">Description: ' . $value['contenu'] . '</h5>
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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Historique de vos formations</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                      <tr>
                                        <th>Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
                                        <th>Plus d'info</th>
                                        <th>Suivre</th>
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
                                   <td>
                                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#' . $value['id_f'] . '">+</button>
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
                                                    <h4 class="modalContent">Adresse : <h5 class="modalContent">todo</h5></h4>
                                                    <h5 class="modalContent">Description: ' . $value['contenu'] . '</h5>
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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
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
