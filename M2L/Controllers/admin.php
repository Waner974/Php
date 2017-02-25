<?php
if($_SESSION['auth']['level']== 1)
{
    include 'Core/statsAdmin.class.php';
    require "Models/admin.php";

    $nbAdmin = get_nbAdmin();
    $nbChef = get_nbChef();
    $nbUser = get_nbUser();
    $nbForm = get_nbForm();
    $nbPresta = get_nbPresta();

    require "Views/admin.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}
