<?php
function get_nbAdmin()
    {
        global $bdd;
       	$reponse = $bdd->query('SELECT count(*) as nbAdmin FROM salarie WHERE level= 1');
		while ($data = $reponse->fetch()){
			return $data['nbAdmin'];
		}
    }

function get_nbChef()
    {
        global $bdd;
       	$reponse = $bdd->query('SELECT count(*) as nbChef FROM salarie WHERE level= 2');
		while ($data = $reponse->fetch()){
			return $data['nbChef'];
		}
    }

 function get_nbUser()
    {
        global $bdd;
       	$reponse = $bdd->query('SELECT count(*) as nbUser FROM salarie WHERE level= 3');
		while ($data = $reponse->fetch()){
			return $data['nbUser'];
		}
    }

 function get_nbForm()
    {
        global $bdd;
       	$reponse = $bdd->query('SELECT count(*) as nbForm FROM formation');
		while ($data = $reponse->fetch()){
			return $data['nbForm'];
		}
    }

?>