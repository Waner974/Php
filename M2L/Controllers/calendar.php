<?php
if($_SESSION['auth']['level']== 1)
{
    require "Models/admin.php";
    require "Models/formationUser.php";
    require "Models/calendar.php";

//    $id_s = $_GET['id'];
//    $listeFormation = getFormationsUser($id_s);
    $_GET['p'] = 'admin';
    require "Views/calendar.php";
}
elseif($_SESSION['auth']['level']== 2)
{
    require "Models/admin.php";
    require "Models/formationUser.php";
    require "Models/calendar.php";

//    $id_s = $_GET['id'];
//    $listeFormation = getFormationsUser($id_s);
    $_GET['p'] = 'chef';
    require "Views/calendar.php";

}
else
{
    header("Location:".BASE_URL."/disconnect");
}