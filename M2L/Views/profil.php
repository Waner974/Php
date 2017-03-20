<section class="content">

    <div class="row">
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="http://www.africabeauties.net/img/team/team-member.jpg" alt="User profile picture">

                    <h3 class="profile-username text-center"><?= $_SESSION['auth']['nom'],' ', $_SESSION['auth']['prenom'] ?></h3>

                    <p class="text-muted text-center"><?= $_SESSION['auth']['mail'] ?></p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Jours de Formations</b> <a class="pull-right"><?= $_SESSION['auth']['NbJour'] ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Crédits</b> <a class="pull-right"><?= $_SESSION['auth']['credits'] ?></a>
                        </li>
                        <?php if($_SESSION['auth']['level']== 3)
                        echo "<li class='list-group-item'>
                            <b>Chef d'équipe</b> <a class='pull-right'>$chef</a>
                        </li>"
                        ?>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><i class="glyphicon glyphicon-comment"></i> <span>Message</span></a>
                </div>
            </div>
        </div>
    </div>
</section>