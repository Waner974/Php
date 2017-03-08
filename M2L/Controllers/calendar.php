<?php
//if($_SESSION['auth']['level']== 1 || $_SESSION['auth']['level']== 2)
if($_SESSION['auth'])
{
    require "Models/calendar.php";

    $listFormation = getFormations();

    require "Views/calendar.php";
}

else
{
    header("Location:".BASE_URL."/disconnect");
}