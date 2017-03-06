<?php

function getFormations()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * FROM formation');
    while($data = $reponse->fetchAll())
    {
        return $data;
    }
}
?>