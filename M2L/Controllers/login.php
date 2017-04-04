<?php 

require "Models/login.php";

if(isset($_COOKIE['auth']) && !isset($_SESSION['auth']))
{

    $auth = $_COOKIE['auth'];
    $auth = explode('_____',$auth);
    $user = get_user_cookie($auth[0]);

    $key = sha1($user['mail'].$user['password'].$_SERVER['REMOTE_ADDR']);
    if($key == $auth[1])
    {
        $_SESSION['auth'] = $user; 
        setcookie('auth',$user['id_s'].'_____'.sha1($user['mail'].$user['password'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost');
        
        if($user['level'] == 1)
        header("Location:".BASE_URL."admin");
        elseif($user['level'] == 2)
        header("Location:".BASE_URL."chef");
        else
        header("Location:".BASE_URL."accueil");
    }
    else
    {
        setcookie('auth','',time()-3600);
    }
}

if(isset($_POST['submit']))
{
    $user = get_user($_POST);
            
    if($user)
    {
        $_SESSION['auth'] = $user; //connection user
        if(isset($_POST['remember']))
        {
            setcookie('auth',$user['id_s'].'_____'.sha1($user['mail'].$user['password'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost');
        }
        if($user['level'] == 1)
        header("Location:".BASE_URL."admin");
    	elseif($user['level'] == 2)
        header("Location:".BASE_URL."chef");
    	else
        header("Location:".BASE_URL."accueil");
    	
                   
     }
     else
     {
         echo'<div class="alert alert-warning">Mauvais identifiants !</div>';
     }
}

require "Views/login.php"
?>