<?php 
session_start();
require "Models/connect.php";

define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));
if(!isset($_SESSION['auth']))
{
    require "Controllers/login.php";
}
else
{
    if(!isset($_GET['p']) || $_GET['p'] == "") {


	$_GET['p'] = "accueil";
    }
    else {
        if(!file_exists("Controllers/".$_GET['p'].".php")) 
            $_GET['p'] = '404';
    }

    if($_SESSION['auth']['level']== 1 && $_GET['p'] == "" ) {

     $_GET['p'] = "admin";
     }
    
    ob_start();
        require "Controllers/".$_GET['p'].".php";
        $content = ob_get_contents();
    ob_end_clean();
    
    
    /*if($_GET['p'] == "admin" || $_GET['p'] == "chef" )
    {
        require "Views/layout2.php";
    }
    else
    {
        require "Views/layout.php";
    }*/

//    if($_SESSION['auth']['level'] == 1 || $_SESSION['auth']['level'] == 2  )
    if($_SESSION['auth'])
    {
        require "Views/layout2.php";
    }
    else
    {
        require "Views/layout.php";
    }
   
}
?>