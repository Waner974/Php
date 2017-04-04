<?php $title = 'Ajouter un Utilisateur'?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ajouter une utilisateur</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?= BASE_URL; ?>/gestionUser" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom"/>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenom"/>
                        </div>
                        <div class="form-group">
                            <label for="mail">Adresse Mail</label>
                            <input type="email" id="mail" name="mail" class="form-control" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de Passe</label>
                            <input type="password" id="mdp" name="mdp" class="form-control" placeholder="*******"/>
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
                            <label for="NbJour">Jours de formation</label>
                            <input type="number" id="NbJour" name="NbJour" class="form-control" value="0" min="0" max="15"/>
                        </div>
                        <div class="form-group">
                            <label for="credits">Crédits de formation</label>
                            <input type="number" id="credits" name="credits" class="form-control" value="0" min="0" max="5000"/>
                        </div>
                        <div class="form-group">
                            <?php
                            if ($_SESSION["auth"]["level"] == 1) {
                                echo '<label for="level">Niveau</label>
                    <input type="number" id="level" name="level" class="form-control" value="3" min="1" max="3"/>
                    <p>(1 = administrateur, 2 = chef, 3 = utilisateur)</p>
                    ';
                            }
                            ?>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>