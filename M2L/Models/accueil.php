<?php 

function getFormations()
{
		global $bdd;
       	$reponse = $bdd->query('select * from formation where DATE_FORMAT(CURRENT_DATE(),"%Y-%m-%d") < date_f;');
		    while ($data = $reponse->fetchAll()){
		    	
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

function getFormSuivi()
{
    global $bdd;
       	$reponse = $bdd->prepare('SELECT * FROM suivre');
        $reponse->execute();
        while($data = $reponse->fetchAll())
        {
            return $data;
        }
}


?>