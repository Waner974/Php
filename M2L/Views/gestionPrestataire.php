<div class="col-md-6 col-md-offset-4">

    <form action="<?= BASE_URL; ?>/gestionPrestataire" method="post">
        <div class="col-md-8 col-md-offset-2">
            <h3>Ajouter un prestataire</h3>
            <hr>
            <div class="form-group">
                <label>Adresse</label>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="numero"/>
                <input type="text" id="rue" name="rue" class="form-control" placeholder="rue"/>
                <input type="text" id="commune" name="commune" class="form-control" placeholder="commune"/>
                <input type="text" id="code postale" name="code postale" class="form-control"
                       placeholder="code postale"/>
            </div>

            <div class="form-group">
                <hr>
                <label>Raison sociale</label>
                <input type="text" id="raison_s" name="raison_s" class="form-control" placeholder="Raison sociale"/>
                <hr>
                <button type="submit" name="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
    <div class="clearfix"></div>
</div>