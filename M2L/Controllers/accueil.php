<?php 

    if($_SESSION['auth']['level'] == 3)
    {
        require "Models/accueil.php";        
        $_GET['p'] = 'accueil';
        $Formations = getFormations();
        $id_s = $_SESSION['auth']['id_s'];
        
        $FormSuivi = getFormSuivi();

        if(isset($_POST['Suivre']))
        {
            $id_f = $_POST['idForm'];
            suivreForm($id_s,$id_f);
            header("Location:".BASE_URL."/accueil");   
        }

        require "Views/accueil.php";

    }
    else
    {
       header("Location:".BASE_URL."/disconnect");
    }
?>