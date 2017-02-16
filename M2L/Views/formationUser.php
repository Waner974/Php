<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2>Liste des formation</h2>            
                  
                    <?php foreach($listeFormation as $key => $value)
                        {
                            echo '<table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Formation</th>
                                        <th>Etat</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>'.$_GET["salarie.nom"].'</td>
                                        <td>'.$_GET["salarie.prenom"].'</td>
                                        <td>'.$_GET["formation.libelle"].'</td>
                                        <td>'.$_GET["formation.etat"].'</td>
                                      </tr>
                                    </tbody>
                                  </table>';
                        }
                    ?>
                
            </div>
        </div>
    </div>
</div>
