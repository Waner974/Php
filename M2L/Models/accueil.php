<?php 
function getForm($id)
{
	global $bdd;
	$req = $bdd->prepare('SELECT * FROM formation f WHERE NOT EXISTS (SELECT * FROM suivre s WHERE f.id_f = s.id_f and s.id_s like :id)');
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}                              

function suivreForm($id_s,$id_f)
{
		global $bdd;
		 $etat = "En attente";
		 $req = $bdd->prepare('INSERT INTO suivre(etat,id_s,id_f) VALUES (:etat,:id_s,:id_f)');
		 $req->bindParam(':etat', $etat);
		 $req->bindParam(':id_s', $id_s);
		 $req->bindParam(':id_f', $id_f);
    	 $req->execute();
}

function getFormAtt($id)
{
    global $bdd;
	$req = $bdd->prepare("select * from formation f, suivre s where f.id_f = s.id_f and s.id_s = :id and s.etat='En attente'");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}

function getHisto($id)
{
	global $bdd;
	$req = $bdd->prepare("select * from formation f, suivre s where f.id_f = s.id_f and s.id_s = :id  and (s.etat='Validé' or s.etat ='Refusé')");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}


?>