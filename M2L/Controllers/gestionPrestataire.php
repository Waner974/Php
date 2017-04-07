<?php

if($_SESSION['auth']['level']== 1 ||$_SESSION['auth']['level']== 2 )
{
    require "Models/gestionPrestataire.php";
    if(isset($_POST['submit']))
    {
        if (preg_match("#^[0-9]$#", $_POST['numero']))
        {
            if(preg_match("#^[a-zA-Z -ÀÉÈËÊÔÂÜÄÌïî]{1,30}$#", $_POST['rue']))
            {
                if(preg_match("#^[a-zA-Z -ÀÉÈËÊÔÂÜÄÌïî]{1,30}$#", $_POST['commune']))
                {
                    if(preg_match("#^[0-9]{5}|2A|2B$#", $_POST['code_postale']))
                    {
                       if(preg_match("#^[a-zA-Z -ÀÉÈËÊÔÂÜÄÌïî]{1,30}$#", $_POST['raison_s']))
                        {
                            addPresta();
                            echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-info">Ajout réussie!</div></div>';
                        }

                        else
                        {
                            echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-danger">la raison sociale est incorrect</div></div>';
                        }     
                    }

                    else
                    {
                        echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-danger">le code postale est incorrect</div></div>';
                    }
                }

                else
                {
                    echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-danger">la ville est incorrect</div></div>';
                }
            }
                   
            else
            {
                echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-danger">la rue est incorrect</div></div>';
            }
        }
            
        else
        {
                echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-danger">numéro de rue incorrect</div></div>';
        }    
    }
        
    if($_SESSION['auth']['level']== 1)
    {
        $_GET['p'] = 'admin';
    }
    else
    {
        $_GET['p'] = 'chef';
    }
    require "Views/gestionPrestataire.php";
}
else
{
    header("Location:".BASE_URL."/disconnect");
}
