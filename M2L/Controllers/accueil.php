<?php 

    if($_SESSION['auth']['level'] == 3)
    {
        require "Models/accueil.php";        
        $_GET['p'] = 'accueil';
        require "Views/accueil.php";
        $Formations = getFormations();
    }
    else
    {
       header("Location:".BASE_URL."/disconnect");
    }
?>