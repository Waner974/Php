<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2 class="page-title">Stats</h2>
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-body bk-primary text-light">
                            <div class="stat-panel text-center">
                                <div class="stat-panel-number h1 ">
                                    <?php echo $nbAdmin; ?>
                                </div>
                                <div class="stat-panel-title text-uppercase"><span
                                            class="glyphicon glyphicon-user"></span> Nb. Admin
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-body bk-success text-light">
                            <div class="stat-panel text-center">
                                <div class="stat-panel-number h1 ">
                                    <?php echo $nbChef; ?>
                                </div>
                                <div class="stat-panel-title text-uppercase">Nb. Chef</div>
                            </div>
                        </div>
                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i
                                    class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-body bk-info text-light">
                            <div class="stat-panel text-center">
                                <div class="stat-panel-number h1 ">
                                    <?php echo $nbUser; ?>
                                </div>
                                <div class="stat-panel-title text-uppercase">Nb. Users</div>
                            </div>
                        </div>
                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i
                                    class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-body bk-warning text-light">
                            <div class="stat-panel text-center">
                                <div class="stat-panel-number h1 "><?php
                                    echo $nbForm; ?></div>
                                <div class="stat-panel-title text-uppercase">Nb. Formations</div>
                            </div>
                        </div>
                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i
                                    class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
