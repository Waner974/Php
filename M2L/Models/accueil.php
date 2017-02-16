<?php 

function getFormations()
{
		global $bdd;
       	$reponse = $bdd->query('select * from formation where DATE_FORMAT(CURRENT_DATE(),"%Y-%m-%d") < date_f;');
		    while ($data = $reponse->fetch()){
		    	
		    	echo('<div class="col-lg-6 col-lg-offset-3"><div class="panel panel-warning">');
		    	echo ('<div class="panel-heading"><h4>'.$data['libelle'].'</h4></div>');
		    	echo('<div class="panel-body"><h5>Date formation:'.$data['date_f'].'</h5>');
		    	echo(' <h5>Durée: '.$data['NbJour'].' jour(s)</h5><hr>');
		    	echo('<div class="caption">');
		    	echo('<p><a href="#'.$data['id_f'].'" class="btn btn-warning pull-right" role="button" data-toggle="collapse">+</a></p>');
		    	echo('<div id="'.$data['id_f'].'" class="collapse">'.$data['contenu'].'</div></div></div></div></div>');
		}
}                              
                                    


?>