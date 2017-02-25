<div class="col-md-6 col-md-offset-4">
    <form action="<?= BASE_URL; ?>/gestionFormation" method="post">
        <div class="col-md-8 col-md-offset-2">
            <h3>Ajouter une formation</h3><hr>
            <per> <?php //if(isset($_POST)) { var_dump($_POST); }?> </per>
             <div class="form-group">
                <label for="libelle">Prestataire : </label>
                    <select class="form-control" name="presta">
                        <?php 
                            if(sizeof($presta) > 0)
                            {
                                foreach($presta as $key => $value)
                                {
                                    echo '<option value="'.$value['id_p'].'">'.$value['raison_s'].'</option>';
                                }
                            }
                            else
                            {
                                echo '<option>Pas de prestataire</option>';
                            }
                        ?>
                    </select>
            </div>
            <div class="form-group">
            
            <div class="form-group">
                <label for="libelle">Nom de la formation : </label>
                <input type="text" id="libelle" name="libelle" class="form-control" placeholder="Libelle"/>
            </div>
            
            <div class="form-group">
                <label for="type">Type de la formation : </label>
                <select class="form-control" name="type">
                    <option>Initiale</option>
                    <option>Alternance</option>
                </select>
            </div>    
            
            <div class="form-group">
                <label for="contenu">Contenu de la formation : </label>
                <textarea id="contenu" name="contenu" class="form-control" rows="5" placeholder="Contenu"></textarea>
            </div>
            <div class="form-group">
                <label for="date_f">Date de fin : </label>
                <input type="date" id="date_f" name="date_f" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="nbJour">Durée : </label>
                <input type="number" id="nbJour" name="nbJour" class="form-control" placeholder="Durée"/>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse : </label>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="numero"/>
                <input type="text" id="rue" name="rue" class="form-control" placeholder="rue"/>
                <input type="text" id="commune" name="commune" class="form-control" placeholder="commune"/>
                <input type="text" id="code postale" name="code postale" class="form-control"
                       placeholder="code postale"/>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>