<?php 

function getFormations()
{
		global $bdd;
       	$reponse = $bdd->query('select * from formation where DATE_FORMAT(CURRENT_DATE(),"%Y-%m-%d") < date_f;');
		    while ($data = $reponse->fetchAll()){
		    	
		    	return $data;
		}
}                              
                                    


?>