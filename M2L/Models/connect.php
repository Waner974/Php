<?php
    try
    {
       $bdd = new PDO("mysql:host=db673949659.db.1and1.com;dbname=db673949659;charset=utf8","dbo673949659","mdp"); // connection bdd
    }
    catch(Exception $e)
    {
        echo("<div class='alert alert-danger'><i class='glyphicon glyphicon-remove-sign'></i><strong>Erreur de connexion !</strong></div>"); //erreur
    }
?>