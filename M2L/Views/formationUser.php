<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2>Liste des formations</h2><hr><br>               
                <div class="col-md-7 col-md-offset-2">
                  <table class="table table-default">
                                    <thead>
                                      <tr>
                                        <th>Formation(s)</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead><i></i>
                     <?php   
                      
                      
                     if(sizeof($listeFormation) > 0)
                     {
                     echo ('<h4><i class="glyphicon glyphicon-user"></i>'." ".$listeFormation[0]['nom']." ".$listeFormation[0]['prenom'].'</h4><hr>');
                         foreach($listeFormation as $key => $value)
                            {
                                $form = "";
                                
                                if($value['etat'] == "Validé")
                                 {
                                     $etat = '<span class="label label-success">'.$value['etat'].' <i class="glyphicon glyphicon-ok"></i></span>';
                                 }
                                 elseif($value['etat'] == "Refusé")
                                 {
                                    $etat = '<span class="label label-danger">'.$value['etat'].' <i class="glyphicon glyphicon-remove"></i></span>';
                                 }
                                 else
                                 {   
                                    $etat = '<span class="label label-warning">'.$value['etat'].' <i class="glyphicon glyphicon-time"></i></span>';
                                    
                                    $form = '<form method="post">
                                            <button type="submit" class="btn btn-success" name="Valide" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>  
                                            <button type="submit" class="btn btn-danger" name="Refuse" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> 
                                            <input name="idForm" type="hidden" value="'.$value['id_f'].'" >
                                                </form>';
                                 }
                                echo '
                                        <tbody>
                                            <tr>
                                                <td>'.$value["libelle"].'</td>
                                                <td>
                                                '.$etat.'
                                                </td>
                                                <td>
                                                '.$form.'
                                                </td>
                                            </tr>
                                        </tbody>';            
                            }
                      }
                      else{
                        echo '
                                        <tbody>
                                            <tr>
                                                <td>Aucune formation</td></tr></tbody>';
                      }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
