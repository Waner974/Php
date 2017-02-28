<?php

class statsAdmin
{
    public static function stats ($color, $nb, $title, $icon,$type)
    {
        $stats = '<div class="col-lg-3 col-xs-6">
          <div class="small-box bg-'.$color.'">
            <div class="inner">
              <h3>'.$nb.'</h3>
              <p>'.$title.'</p>
            </div>
            <div class="icon">
              <i class="ion ion-'.$icon.'"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#'.$type.'">Voir tous <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>';

        return $stats;
    }
}