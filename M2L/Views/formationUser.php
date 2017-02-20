<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2>Liste des formation </h2><hr><br>               
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
                     echo ('<h4><i class="glyphicon glyphicon-user"></i>'." ".$listeFormation[0]['nom']." ".$listeFormation[0]['prenom'].'</h4><hr>');
                      
                      
                     if(sizeof($listeFormation) > 0)
                     {
                         foreach($listeFormation as $key => $value)
                            {
                                if($value['etat'] == "Validé")
                                 {
                                     $classEtat = "list-group-item list-group-item-success";
                                 }
                                 elseif($value['etat'] == "Refusé")
                                 {
                                     $classEtat = "list-group-item list-group-item-danger";
                                 }
                                 else
                                 {
                                     $classEtat = "list-group-item list-group-item-info";
                                 }
                                
                                echo '
                                        <tbody>
                                            <tr>
                                                <td>'.$value["libelle"].'</td>
                                                <td>
                                                    <option selected="selected" class="'.$classEtat.'">'.$value['etat'].'</option>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>Validé</option>
                                                        <option>Refusé</option>
                                                        <option>En attente</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>';            
                            }
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