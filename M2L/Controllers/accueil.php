<?php 

    if($_SESSION['auth']['level'] == 3)
    {
        require "Models/accueil.php";        
        $_GET['p'] = 'accueil';
        $Formations = getFormations();
        require "Views/accueil.php";
    }
    else
    {
       header("Location:".BASE_URL."/disconnect");
    }
?>