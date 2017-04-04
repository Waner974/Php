<?php
    try
    {
       $bdd = new PDO("mysql:host=thomasevwzm2l.mysql.db;dbname=thomasevwzm2l;charset=utf8","thomasevwzm2l","Ux32f37a"); // connection bdd
    }
    catch(Exception $e)
    {
        die("erreur de connexion"); //erreur
    }
?>