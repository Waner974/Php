<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/admin.php";
    require "Models/formationUser.php";


    $listeFormation = getFormationsUser($_GET['id']);

    require "Views/formationUser.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}