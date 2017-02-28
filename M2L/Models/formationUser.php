<?php 

function getFormationsUser($id)
{
		global $bdd;
       	$reponse = $bdd->prepare('SELECT formation.id_f ,salarie.id_s, salarie.nom, salarie.prenom, formation.libelle, suivre.etat 
			from suivre, salarie, formation 
			where salarie.id_s = suivre.id_s 
			and formation.id_f = suivre.id_f 
			and salarie.id_s =:id');
        $reponse->bindValue(':id', $id,PDO::PARAM_STR);
        $reponse->execute();
        while($data = $reponse->fetchAll())
        {
            return $data;
        }
}

function valide($id_f,$id_s)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE suivre SET etat="Validé" where id_f= :id_f and id_s= :id_s');
     $req->bindParam(':id_s', $id_s);
     $req->bindParam(':id_f', $id_f);
     $req->execute();

}

function refuse($id_f,$id_s)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE suivre SET etat="Refusé" where id_f= :id_f and id_s= :id_s');
    $req->bindParam(':id_s', $id_s);
    $req->bindParam(':id_f', $id_f);
    $req->execute();
}
?>