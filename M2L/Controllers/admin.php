<?php
if($_SESSION['auth']['level']== 1)
{
    require "Models/admin.php";

    $nbAdmin = get_nbAdmin();
    $nbChef = get_nbChef();
    $nbUser = get_nbUser();
    $nbForm = get_nbForm();

    require "Views/admin.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}
