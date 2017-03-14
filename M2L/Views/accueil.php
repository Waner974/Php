 <div class="container">
        <div class="row">
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
                                    </thead><i></i>
                <?php
                    
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
                                   <td>'.$value['credits'].' credit(s)</td>
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
                                                    <h4 class="modalContent">Le : '.$value['date_d'].' - '.$value['date_f'].'</h4>
                                                    <h4 class="modalContent">Durée : '.$value['NbJour'].' Jour(s)</h4>
                                                    <h4 class="modalContent">Coût : '.$value['credits'].' Crédit(s)</h4>
                                                    <h4 class="modalContent">Adresse :<h5 class="modalContent">todo</h5></h4>
                                                    <h5 class="modalContent">Description:'.$value['contenu'].'</h5>  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td>'.$Suivre.'</td>
                                </tr>
                            </tbody>');
                } 


                ?>
                        </table>
                    </div>
            </div>
            <!-- /.box-body -->
          </div>

                    <div class="box box-warning collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Formations en attentes</h3>

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
                                    </thead><i></i>
                <?php

                if (isset($FormAtt)) {
                    foreach ($FormAtt as $key => $value) 
                {
                        echo('
                            <tbody>
                                <tr>
                                   <td>'.$value["libelle"].'</td>
                                   <td>'.$value['date_d'].' - '.$value['date_f'].'</td>
                                   <td>'.$value['NbJour'].' Jour(s)</td>
                                   <td>'.$value['credits'].' Crédit(s)</td>
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
                                                    <h4 class="modalContent">Le : '.$value['date_d'].' - '.$value['date_f'].'</h4>
                                                    <h4 class="modalContent">Durée : '.$value['NbJour'].' Jour(s)</h4>
                                                    <h4 class="modalContent">Coût : '.$value['credits'].' Crédit(s)</h4>
                                                    <h4 class="modalContent">Adresse :<h5 class="modalContent">todo</h5></h4>
                                                    <h5 class="modalContent">Description:'.$value['contenu'].'</h5>  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td><span class="label label-warning label-xs">'.$value['etat'].' <i class="glyphicon glyphicon-time"></i></span></td>
                                </tr>
                            </tbody>');

                    }
                }

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
                                    </thead><i></i>
                <?php

                if (isset($FormHisto)) {
                    foreach ($FormHisto as $key => $value) 
                {
                    if($value['etat'] == "Validé")
                                 {
                                     $etat = '<span class="label label-success">'.$value['etat'].' <i class="glyphicon glyphicon-ok"></i></span>';
                                 }
                                 elseif($value['etat'] == "Refusé")
                                 {
                                    $etat = '<span class="label label-danger">'.$value['etat'].' <i class="glyphicon glyphicon-remove"></i></span>';
                                 }
                        echo('
                            <tbody>
                                <tr>
                                   <td>'.$value["libelle"].'</td>
                                   <td>'.$value['date_d'].' - '.$value['date_f'].'</td>
                                   <td>'.$value['NbJour'].' Jour(s)</td>
                                   <td>'.$value['credits'].' credit(s)</td>
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
                                                    <h4 class="modalContent">Le : '.$value['date_d'].' - '.$value['date_f'].'</h4>
                                                    <h4 class="modalContent">Durée : '.$value['NbJour'].' Jour(s)</h4>
                                                    <h4 class="modalContent">Coût : '.$value['credits'].' Crédit(s)</h4>
                                                    <h4 class="modalContent">Adresse :<h5 class="modalContent">todo</h5></h4>
                                                    <h5 class="modalContent">Description:'.$value['contenu'].'</h5>  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td>'.$etat.'</td>
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
        </div>
     <div class="clearfix"></div>
    </div>


