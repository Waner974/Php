<?php

function deleteUser($id_s)
{
    global $bdd;

    $req = $bdd->prepare('DELETE FROM suivre WHERE id_s = :id_s');
    $req->bindParam(':id_s', $id_s);
    $req->execute();

    $req = $bdd->prepare('DELETE FROM salarie where id_s = :id_s');
    $req->bindParam(':id_s', $id_s);
    $req->execute();
}