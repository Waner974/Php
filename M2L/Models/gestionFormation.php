<?php
function addFormation()
{
    global $bdd;

    $sql = "INSERT INTO adresse (numero, rue, commune, code_postale) VALUES (:numero,:rue,:commune,:code_postale)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':numero', $_POST['numero']);
    $requete->bindParam(':rue', $_POST['rue']);
    $requete->bindParam(':commune', $_POST['commune']);
    $requete->bindParam(':code_postale', $_POST['code_postale']);
    $requete->execute();

    $sql = "INSERT INTO formation (id_f, libelle, contenu, date_f, NbJour, id_p) VALUES (:id_f, :libelle,:contenu,:date_f,:NbJour,:id_p)";
    $requete = $bdd->prepare($sql);
    $requete->bindParam(':id_f', $_POST['id_f']);
    $requete->bindParam(':libelle', $_POST['libelle']);
    $requete->bindParam(':contenu', $_POST['contenu']);
    $requete->bindParam(':date_f', $_POST['date_f']);
    $requete->bindParam(':NbJour', $_POST['NbJour']);
    $requete->bindParam(':id_p', $_POST['id_p']);
    $requete->execute();
}