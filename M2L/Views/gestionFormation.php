<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ajouter une formation</h3>
                </div>
                <form action="<?= BASE_URL; ?>/gestionFormation" method="post">
                    <div class="box-body">
                        <per> <?php //if(isset($_POST)) { var_dump($_POST); }?> </per>
                        <div class="form-group">
                            <label for="libelle">Prestataire : </label>
                            <select class="form-control" name="presta">
                                <?php
                                if (sizeof($presta) > 0) {
                                    foreach ($presta as $key => $value) {
                                        echo '<option value="' . $value['id_p'] . '">' . $value['raison_s'] . '</option>';
                                    }
                                } else {
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
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" id="date_f" name="date_f" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nbJour">Durée : </label>
                                <input type="number" id="nbJour" name="nbJour" class="form-control" placeholder="Durée"/>
                            </div>
                            <label>Adresse</label>
                            <div class="form-group">
                                <input type="number" id="numero" name="numero" class="form-control" placeholder="N°"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="rue" name="rue" class="form-control" placeholder="Rue"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="commune" name="commune" class="form-control" placeholder="Ville"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="code postale" name="code postale" class="form-control" placeholder="Code Postale"/>
                            </div>

                            <div class="form-group">
                                <label for="raison_s">Raison sociale</label>
                                <input type="text" id="raison_s" name="raison_s" class="form-control" placeholder="Raison sociale"/>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>