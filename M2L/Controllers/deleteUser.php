<?php

if($_SESSION['auth']['level']== 2) {
    require "Models/admin.php";
    require "Models/deleteUser.php";

    if (isset($_POST['deleteUser']))
    {
        $_SESSION['id_user'] = $_POST['idUser'];
    }

    deleteUser($_SESSION['id_user']);
    header("Location:".BASE_URL."/chef");
}
else
{
    header("Location:".BASE_URL."/disconnect");
}