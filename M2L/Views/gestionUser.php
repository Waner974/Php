<div class="col-md-6 col-md-offset-4">

    <form action="<?= BASE_URL; ?>/gestionUser" method="post">
        <div class="col-md-8 col-md-offset-2">
            <h3>Inscription</h3>
            <hr>
            <label>Informations générales</label>
            <div class="form-group">
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom"/>
            </div>

            <div class="form-group">
                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenom"/>
            </div>

            <div class="form-group">
                <input type="text" id="mail" name="mail" class="form-control" placeholder="Email"/>
            </div>

            <div class="form-group">
                <input type="password" id="mdp" name="mdp" class="form-control" placeholder="*******"/>
            </div>

            <div class="form-group">
                <hr>
                <label>Adresse</label>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="numero"/>
                <input type="text" id="rue" name="rue" class="form-control" placeholder="rue"/>
                <input type="text" id="commune" name="commune" class="form-control" placeholder="commune"/>
                <input type="text" id="code postale" name="code postale" class="form-control"
                       placeholder="code postale"/>
            </div>

            <div class="form-group">
                <hr>
                <label>Nombre de jours</label>
                <input type="number" id="" name="NbJour" class="form-control" placeholder="Nombre de jours"/>
                <hr>
                <label>Niveau</label>
                <input type="number" id="level" name="level" class="form-control"/>
                <p>(1 = administrateur, 2 = chef, 3 = utilisateur)</p>
                <button type="submit" name="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>

    </form>
    <div class="clearfix"></div>
</div>