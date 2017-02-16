<?php
    if($_SESSION['auth']['level']== 1)
    {
        require "Models/gestionUser.php";
        if(isset($_POST['submit']))
        {
            addUser();
            echo ('ça marche mdr !');
        }
        $_GET['p'] = 'admin';
        require "Views/gestionUser.php";
    }
    elseif ($_SESSION['auth']['level']== 2) {
        require "Models/gestionUser.php";
        if(isset($_POST['submit']))
        {
            addUserChef();
            echo ('ça marche mdr !');
        }
        $_GET['p'] = 'admin';
        require "Views/gestionUser.php";
    }
    else
    {
         header("Location:".BASE_URL."/disconnect");
    }