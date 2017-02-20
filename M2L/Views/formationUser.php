<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2>Liste des formations</h2><hr><br>               
                <div class="col-md-7 col-md-offset-2">
                <form>
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
                                if($value['etat'] == "Validé")
                                 {
                                     $classEtat = "success";
                                 }
                                 elseif($value['etat'] == "Refusé")
                                 {
                                     $classEtat = "danger";
                                 }
                                 else
                                 {
                                     $classEtat = "warning";
                                 }
                                
                                echo '
                                        <tbody>
                                            <tr>
                                                <td>'.$value["libelle"].'</td>
                                                <td>
                                                    <option selected="selected" class="label label-'.$classEtat.'">'.$value['etat'].'</option>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>Aucune</option>
                                                        <option>Validé</option>
                                                        <option>Refusé</option>
                                                        <option>En attente</option>
                                                    </select>
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
                <input type="submit" class="btn pull-right">
            </form>
            </div>
        </div>
    </div>
</div>
</div>
