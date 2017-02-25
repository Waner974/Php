<?php

class statsAdmin
{
    public static function stats ($color, $nb, $title)
    {
        $stats = '<div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body bk-'.$color.' text-light">
                            <div class="stat-panel text-center">
                                <div class="stat-panel-number h1 ">
                                    '.$nb.'
                                </div>
                                <div class="stat-panel-title text-uppercase">'.$title.'
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block-anchor panel-footer">Voir tous <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>';

        return $stats;
    }
}