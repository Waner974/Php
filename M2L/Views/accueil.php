<?php $title = 'Accueil'?>
        <div class="row">
            <div class="col-md-12">

            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li><a href="#tab_1-1" data-toggle="tab">Historiques</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Formations en attentes</a></li>
              <li class="active"><a href="#tab_3-2" data-toggle="tab">Formations proposées</a></li>

              <li class="pull-left header"><i class="fa fa-university"></i>Formations</li>
            </ul>
            <div class="tab-content">
                <?= tabsFormations::Historic($FormHisto,"1-1","histo")?>
                <?= tabsFormations::Propose($Form,"3-2","propose")?>
              <!--<div class="tab-pane" id="tab_1-1">
                                    <div class="table-responsive no-padding">
                                <table id="histo" class="table table-hover">
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
/*
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
                                                    <h4 class="modalContent">Adresse : '.$value['numero'].' '.$value['rue'].' '.$value['commune'].' '.$value['code_postale'].'</h4>
                                                    <h4 class="modalContent">Description:'.$value['contenu'].'</h4>  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td>'.$etat.'</td>
                                </tr>
                            ');
                    }
                }
                */?>
                </table>
 </div>
              </div>-->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                                    <div class="table-responsive no-padding">
                            <table id="attente" class="table table-hover">
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
                                                    <h4 class="modalContent">Adresse : '.$value['numero'].' '.$value['rue'].' '.$value['commune'].' '.$value['code_postale'].'</h4>
                                                    <h4 class="modalContent">Description:'.$value['contenu'].'</h4>  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    <td><span class="label label-warning label-xs">'.$value['etat'].' <i class="glyphicon glyphicon-time"></i></span></td>
                                </tr>
                            ');

                    }
                }
                ?>
                </table>
            </div> 
              </div>
              <!-- /.tab-pane -->
              <!--<div class="tab-pane active" id="tab_3-2">
                                    <div class="table-responsive no-padding">
                        <table id="propose" class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th id="Formations">Formations</th>
                                        <th>Date</th>
                                        <th>Durée</th>
                                        <th>Coût</th>
                                        <th>Plus d'info</th>
                                        <th>Suivre</th>
                                        <th>Fiche</th>
                                      </tr>
                                    </thead>
                <?php
/*
                foreach ($Form as $key => $value) 
                {
                    
                            $form = '<form method="post">
                                    <input name="idForm" type="hidden" value="'.$value['id_f'].'" >
                                  <td>
                                    <button type="submit" class="btn btn-xs" name="Suivre" >
                                        <span><i class="fa fa-mail-forward"></i></span>
                                    </button>  
                                    </td>
                                    </form>
                                    <form method="post" action="' . BASE_URL . '/fiche">
                                    <input name="idForm" type="hidden" value="'.$value['id_f'].'" >
                                    <td>
                                    <button type="submit" class="btn btn-xs" name="Export" >
                                      <span><i class="fa fa-file-o"></i></span>
                                    </button> 
                                    </td>
                                </form>';
                        echo('
                            
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
                                                    <h4 class="modalContent">Adresse : '.$value['numero'].' '.$value['rue'].' '.$value['commune'].' '.$value['code_postale'].'</h4>
                                                    <h4 class="modalContent">Description:'.$value['contenu'].'</h4>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                   </td>
                                    '.$form.'
                                </tr>
                            ');
                } 


                */?>
                        </table>
                    </div>
              </div>-->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>

          </div>
          </div>



         
       
     <div class="clearfix"></div>
