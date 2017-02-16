<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/chef.php";
    $id= $_SESSION['auth']['id_s'];
	$nbUser = getNbUser($id);
	$user = getUser($id);
    require "Views/chef.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}