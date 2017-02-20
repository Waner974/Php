<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/admin.php";
    require "Models/formationUser.php";

    $id = $_GET['id'];
    $listeFormation = getFormationsUser($id);
    
    $_GET['p'] = 'chef';

    require "Views/formationUser.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}