<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2 class="page-title">Statistiques</h2>
                <?= statsAdmin::stats("primary","$nbAdmin","Administrateurs") ?>
                <?= statsAdmin::stats("success","$nbChef","Chefs de formations") ?>
                <?= statsAdmin::stats("info","$nbUser","Utilisateurs") ?>
                <?= statsAdmin::stats("warning","$nbForm","Formations") ?>
                <?= statsAdmin::stats("danger","$nbPresta","Prestataires") ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
