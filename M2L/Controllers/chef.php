<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/chef.php";

    

    require "Views/chef.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}