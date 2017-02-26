<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> Liste des formations</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Formation(s)</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                        <?php


                        if (sizeof($listeFormation) > 0) {
                            echo('<h4><i class="glyphicon glyphicon-user"></i> ' . " " . $listeFormation[0]['nom'] . " " . $listeFormation[0]['prenom'] . '</h4><hr>');
                            foreach ($listeFormation as $key => $value) {
                                $form = "";

                                if ($value['etat'] == "Validé")
                                {
                                    $value['etat'] = '<span class="label label-success"><i class="glyphicon glyphicon-ok"></i> Validé</span>';
                                }
                                elseif ($value['etat'] == "Refusé")
                                {
                                    $value['etat'] = '<span class="label label-danger"><i class="glyphicon glyphicon-remove"></i> Refusé</span>';
                                }
                                else
                                {
                                    $value['etat'] = '<span class="label label-warning"><i class="glyphicon glyphicon-time"></i> En attente</span>';

                                    $form = '<form method="post">
                                            <button type="submit" class="btn btn-success" name="Valide" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>  
                                            <button type="submit" class="btn btn-danger" name="Refuse" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> 
                                            <input name="idForm" type="hidden" value="' . $value['id_f'] . '" >
                                                </form>';
                                }
                                echo '
                                        <tbody>
                                            <tr>
                                                <td>' . $value["libelle"] . '</td>
                                                <td>
                                                ' . $value['etat'] . '
                                                </td>
                                                <td>
                                                ' . $form . '
                                                </td>
                                            </tr>
                                        </tbody>';
                            }
                        } else {
                            echo '
                                        <tbody>
                                            <tr>
                                                <td>Aucune formation</td></tr></tbody>';
                        }
                        ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
