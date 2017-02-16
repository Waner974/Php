<?php
function getNbUser($id)
{
	global $bdd;
	$req = $bdd->prepare("SELECT count(*) as nb FROM salarie WHERE salarie.id_s_1=:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req ->fetch())
	{
		return $data['nb'];
	}

}

function getUser($id)
{
	$nb = getNbUser($id);
	global $bdd;
	$req = $bdd->prepare("SELECT id_s,nom,prenom,mail FROM salarie WHERE salarie.id_s_1=:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}


?>