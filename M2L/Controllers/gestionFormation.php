<?php

    if($_SESSION['auth']['level']== 1 ||$_SESSION['auth']['level']== 2 )
    {
        require "Models/gestionFormation.php";
        if(isset($_POST['submit']))
        {
            addFormation();
            echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-info">Ajout réussie!</div></div>';    
        }
        $_GET['p'] = 'admin';
        require "Views/gestionFormation.php";
    }
    else
    {
        header("Location:".BASE_URL."/disconnect");
    }
