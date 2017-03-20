<?php

function getchefequipe($id_s)
{
    global $bdd;
    $requete = $bdd->query("SELECT id_s_1 FROM salarie WHERE id_s = :id");
	$requete->bindValue(':id',$id_s,PDO::PARAM_INT);
    $requete->execute();
    while($data = $requete ->fetch())
    {
        return $data;
    }
}