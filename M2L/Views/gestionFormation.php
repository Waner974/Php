<div class="col-md-6 col-md-offset-4">
    <form action="<?= BASE_URL; ?>/gestionFormation" method="post">
        <div class="col-sm-6 col-md-6">
            <h3>Ajouter une formation</h3>
            <div class="form-group">
                <label for="libelle">Nom de la formation:</label>
                <input type="text" id="libelle" name="libelle" class="form-control" placeholder="Libelle"/>
            </div>
            <div class="form-group">
                <label for="contenu">Contenu de la formation:</label>
                <textarea id="contenu" name="contenu" class="form-control" rows="5" placeholder="Contenu"></textarea>
            </div>
            <div class="form-group">
                <label for="date_f">Date de fin:</label>
                <input type="date" id="date_f" name="date_f" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="Nbjour">Durée:</label>
                <input type="number" id="Nbjour" name="Nbjour" class="form-control" placeholder="Durée"/>
            </div>
            <div class="form-group">
                <h3>Adresse : </h3>
                <hr>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="numero"/>
                <input type="text" id="rue" name="rue" class="form-control" placeholder="rue"/>
                <input type="text" id="commune" name="commune" class="form-control" placeholder="commune"/>
                <input type="text" id="code postale" name="code postale" class="form-control"
                       placeholder="code postale"/>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>