<div class="container">
    <div class="row">
            <div class="row">
                <?= statsAdmin::stats("red","$nbAdmin","Administrateurs","person-add") ?>
                <?= statsAdmin::stats("green","$nbChef","Chefs de formations","person-add") ?>
                <?= statsAdmin::stats("orange","$nbUser","Utilisateurs","person-add") ?>
                <?= statsAdmin::stats("blue","$nbForm","Formations","stats-bars") ?>
                <?= statsAdmin::stats("purple","$nbPresta","Prestataires","person-add") ?>
            </div>
    </div>
</div>