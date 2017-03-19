<?php
    if($_SESSION['auth']['level']== 1)
    {
        require "Models/gestionUser.php";
        if(isset($_POST['submit']))
        {
            addUser();

            $header="MIME-Version: 1.0\r\n";
            $header.='From:"M2L-Formation.com"<support@m2lformation.com>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            $password = $_POST['mdp'];
            $nbjour = $_POST['NbJour'];
            $credits = $_POST['credits'];

            $message='
            <html>
                <body>
                    <div align="center">
                        <br />
                        Un Administrateur vous as inscrit a M2L formation<br />
                        Voici vos Identifants:<br />
                        Nom: <strong>'.$nom.'</strong><br />
                        Prenom: <strong>'.$prenom.'</strong><br />
                        Mail: <strong>'.$mail.'</strong><br />
                        Mot de Passe: <strong>'.$password.'</strong><br />
                        Vous disposez de : <strong>'.$nbjour.'</strong> jours de formation et de <strong>'.$credits.'</strong> credits<br />
                        <br />
                    </div>
                </body>
            </html>
            ';
            mail($mail, "Inscription M2L formation", $message, $header);
            
        }
        $_GET['p'] = 'admin';
        require "Views/gestionUser.php";
    }
    elseif($_SESSION['auth']['level']== 2)
    {
        require "Models/gestionUser.php";
        if(isset($_POST['submit']))
        {
            addUserPourChef();

            $header="MIME-Version: 1.0\r\n";
            $header.='From:"M2L-Formation.com"<support@m2lformation.com>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            $password = $_POST['mdp'];
            $nbjour = $_POST['NbJour'];
            $credits = $_POST['credits'];

            $message='
            <html>
                <body>
                    <div align="center">
                        <br />
                        Un Chef d\'equipe vous as inscrit a M2L formation<br />
                        Voici vos Identifants:<br />
                        Nom: <strong>'.$nom.'</strong><br />
                        Prenom: <strong>'.$prenom.'</strong><br />
                        Mail: <strong>'.$mail.'</strong><br />
                        Mot de Passe: <strong>'.$password.'</strong><br />
                        Vous disposez de : <strong>'.$nbjour.'</strong> jours de formation et de <strong>'.$credits.'</strong> credits<br />
                        <br />
                    </div>
                </body>
            </html>
            ';
            mail($mail, "Inscription M2L formation", $message, $header);
        }
        $_GET['p'] = 'chef';
        require "Views/gestionUser.php";
    }
    else
    {
         header("Location:".BASE_URL."/disconnect");
    }