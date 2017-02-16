<?php 

function getFormationsUser($id)
{
		global $bdd;
       	$reponse = $bdd->prepare('select salarie.id_s, salarie.nom, salarie.prenom, formation.libelle, formation.etat from suivre, salarie, formation where salarie.id_s = suivre.id_s and formation.id_f = suivre.id_f and salarie.id_s = :id');
        $reponse->bindValue(':id', $id,PDO::PARAM_STR);
        $reponse->execute();
        while($data = $reponse->fetchAll())
        {
            return $data;
        }
}                              

?>