<?php

    if($_SESSION['auth']['level']== 1 ||$_SESSION['auth']['level']== 2 )
    {
        require "Models/gestionFormation.php";
        
        $presta = getPresta();
        
        if(isset($_POST['submit']))
        {
            $codePostal = $_POST['code_postale'];
            $libelle = $_POST['libelle'];
            $datedébut = $_POST['date_d'];
            $datefin = $_POST['date_f'];
            $credits = $_POST['credits'];
            $jours = $_POST['nbJour'];
            $i = 0;
            $alerte = "";

            if (!preg_match("#^[a-zA-Z]{3,30}$#",$libelle))
            {
                $i++;
                $alerte.= 'Nom de la formation invalide</br>';
            }
            if (!preg_match("#^(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$#",$datedébut))
            {
                $i++;
                $alerte.= 'Date de début invalide</br>';
            }

            if (!preg_match("#^(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$#",$datefin))
            {
                $i++;
                $alerte.= 'Date de fin invalide</br>';
            }
            /*if (!preg_match("#^([0-3][0-9])\-([0-9]{2,2})\-([0-9]{2,4})$#",$datefin))
            {
                echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-danger">Date de fin invalide</div></div>';
            }*/
            if (!preg_match("#^[0-9]{5}$#",$codePostal))
            {
                $i++;
                $alerte.= 'Code Postal invalide</br>';
            }
            if (!preg_match("#^0-9]{1,3}$#",$jours))
            {
                $i++;
                $alerte.= 'Nombre de jours invalide</br>';
            }
            if (!preg_match("#^[0-9]{1,4}$#",$credits))
            {
                $i++;
                $alerte.= 'Nombre de crédits invalide</br>';
            }
            if ($i > 0)
            {
                echo "<div class='box-body'>
                <div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-ban'></i> Erreur !</h4>
                ".$alerte."
                </div>
                </div>" ;
            }
            else
            {
                addFormation();
                echo '<div class="col-md-10 col-md-offset-2"><div class="alert alert-info">Ajout réussie!</div></div>';
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
        
        require "Views/gestionFormation.php";
    }
    else
    {
        header("Location:".BASE_URL."/disconnect");
    }
