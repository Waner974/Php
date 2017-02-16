<?php

    if($_SESSION['auth']['level']== 1)
    {
        require "Models/gestionFormation.php";
        if(isset($_POST['submit']))
        {
            addFormation();
            echo ('ajouté');
        }
        $_GET['p'] = 'admin';
        require "Views/gestionFormation.php";
    }
    else
    {
        header("Location:".BASE_URL."/disconnect");
    }
