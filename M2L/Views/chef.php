<div class="container">
    <div class="row">
        <div class="row">
            <?= statsAdmin::stats("blue", "$nbUser", "Utilisateur(s) affecté(s)","person-add","user") ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Liste des utilisateurs</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Mail</th>
                                <th>Formations</th>
                            </tr>
                            <?php
                            if ($nbUser > 0)
                            {
                                foreach ($user as $key => $value)
                                {
                                    echo
                                        '<tbody>
                            <tr>
                            <td>' . $value['nom'] . '</td>
                            <td>' . $value['prenom'] . '</td>
                            <td>' . $value['mail'] . '</td>
                            <td><a href="' . BASE_URL . '/formationUser?id=' . $value['id_s'] . '" class="glyphicon glyphicon-list"></a></td>
                            </tr>
                            </tbody>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</div>