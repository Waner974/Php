<?php

require "Models/profil.php";

$id_s_1 = $_SESSION['auth']['id_s_1'];
$chefequipe = getchefequipe($id_s_1);
$id_s = $_SESSION['auth']['id_s'];

$user = getinfouser($id_s);

if(isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $password = $_POST['mdp'];
    $credits = $_POST['credits'];
    $nbjour = $_POST['NbJour'];

    if(isset($nom) AND !empty($nom) AND $nom != $user['nom'])
    {
        updateprofilnom($id_s,$nom);
        header("Location:".BASE_URL."/profil");
    }

    if(isset($prenom) AND !empty($prenom) AND $prenom != $user['prenom'])
    {
        updateprofilprenom($id_s,$prenom);
        header("Location:".BASE_URL."/profil");
    }

    if(isset($mail) AND !empty($mail) AND $mail != $user['mail'])
    {
        updateprofilmail($id_s,$mail);
        header("Location:".BASE_URL."/profil");
    }

    if(isset($password) AND !empty($password))
    {
        updateprofilpassword($id_s,$password);
        header("Location:".BASE_URL."/profil");
    }

    if(isset($nbjour) AND !empty($nbjour))
    {
        updateprofilnbjour($id_s,$nbjour);
        header("Location:".BASE_URL."/profil");
    }

    if(isset($credits) AND !empty($credits))
    {
        updateprofilcredits($id_s,$credits);
        header("Location:".BASE_URL."/profil");
    }
}

require "Views/profil.php";

?>