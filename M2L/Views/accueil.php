<section id="templatemo-page1-text" class="active">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h2>Image Gallery</h2>
        
        <div id="slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/slide1.jpg" alt="Slide 1"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/slide2.jpg" alt="Slide 2"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/slide3.jpg" alt="Slide 3"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/slide4.jpg" alt="Slide 4"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/slide5.jpg" alt="Slide 5"/>
                </li>
            </ul>
        </div>
        <div id="carousel" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/thumb1.jpg" alt="Thumbnail 1"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/thumb2.jpg" alt="Thumbnail 2"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/thumb3.jpg" alt="Thumbnail 3"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/thumb4.jpg" alt="Thumbnail 4"/>
                </li>
                <li>
                    <img src="<?= BASE_URL; ?>/Views/images/slider/thumb5.jpg" alt="Thumbnail 5"/>
                </li>
            </ul>
        </div>


        <div class="row">
            <div id="detailForm">


                <h2 class="col-lg-12 ">Liste des Formations à venir </h2>
                <?php
                foreach ($Formations as $key => $value) {
                echo('<div class="col-lg-12"><div class="panel panel-warning">
                    <div class="panel-heading"><h4>'.$value['libelle'].'</h4></div>
                    <div class="panel-body"><h5>Date formation:'.$value['date_f'].'</h5>
                    <h5>Durée: '.$value['NbJour'].' jour(s)</h5><hr><div class="caption">
                    <p>
                    <a href="#'.$value['libelle'].'" class="btn btn-warning pull-right" role="button" value-toggle="collapse">+</a>
                    </p>
                    <div id="'.$value['libelle'].'" class="collapse">'.$value['contenu'].'</div></div></div></div></div>');
} 
                ?>
            </div>
        </div>
    </div>
    </div>

<div class="clearfix"></div>
</section>




