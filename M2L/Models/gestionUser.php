<?php
    function addUser()
    {
        global $bdd;
        
        $sql = "INSERT INTO adresse (numero, rue, commune, code_postale) VALUES (:numero,:rue,:commune,:code_postale)";
        $requete = $bdd->prepare($sql);
        $requete->bindParam(':numero', $_POST['numero']);
        $requete->bindParam(':rue', $_POST['rue']);
        $requete->bindParam(':commune', $_POST['commune']);
        $requete->bindParam(':code_postale', $_POST['code_postale']);
        $requete->execute();
        $p = sha1($_POST['mdp']);
        $id_a = $bdd->lastInsertId();
        $sql = "INSERT INTO salarie (nom, prenom, mail, password, NbJour, level, id_a,id_s_1) VALUES (:nom,:prenom,:mail,:password,:NbJour,:level, :id_a,:id_s_1)";
        $requete = $bdd->prepare($sql);
        $requete->bindParam(':nom', $_POST['nom']);
        $requete->bindParam(':prenom', $_POST['prenom']);
        $requete->bindParam(':mail', $_POST['mail']);
        $requete->bindParam(':password', $p);
        $requete->bindParam(':NbJour', $_POST['NbJour']);
        $requete->bindParam(':level', $_POST['level']);
        $requete->bindParam(':id_a', $id_a);
        $requete->bindParam(':id_s_1', $_SESSION['auth']['id_s']);
        $requete->execute();
        $id_s = $bdd->lastInsertId();
        
        
    }

    function addUserPourChef()
    {
        global $bdd;
        
        $sql = "INSERT INTO adresse (numero, rue, commune, code_postale) VALUES (:numero,:rue,:commune,:code_postale)";
        $requete = $bdd->prepare($sql);
        $requete->bindParam(':numero', $_POST['numero']);
        $requete->bindParam(':rue', $_POST['rue']);
        $requete->bindParam(':commune', $_POST['commune']);
        $requete->bindParam(':code_postale', $_POST['code_postale']);
        $requete->execute();
        $lvl = 3;
        $pass=sha1($_POST['mdp']);
        $id_a = $bdd->lastInsertId();
        $sql = "INSERT INTO salarie (nom, prenom, mail,password, NbJour, level, id_a,id_s_1) VALUES (:nom,:prenom,:mail,:password,:NbJour,:level, :id_a,:id_s_1)";
        $requete = $bdd->prepare($sql);
        $requete->bindParam(':nom', $_POST['nom']);
        $requete->bindParam(':prenom', $_POST['prenom']);
        $requete->bindParam(':mail', $_POST['mail']);
        $requete->bindParam(':password',$pass);
        $requete->bindParam(':NbJour', $_POST['NbJour']);
        $requete->bindParam(':level', $lvl);
        $requete->bindParam(':id_a', $id_a);
        $requete->bindParam(':id_s_1',$_SESSION['auth']['id_s']);
        $requete->execute();
        
        $id_s = $bdd->lastInsertId();
        
    }