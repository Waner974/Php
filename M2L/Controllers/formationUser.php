<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/admin.php";
    require "Models/formationUser.php";

    $id_s = $_GET['id'];

    $listeFormation = getFormationsUser($id_s);

    $_GET['p'] = 'chef';

    if (isset($_POST['Valide']))
	{
		$id_f = $_POST['idForm'];

        $nbjourformation = getnbjourformation($id_f);
        $creditsformation = getcreditsformation($id_f);
        $nbjoursalarie = getnbjoursalarie($id_s);
        $creditssalarie = getcreditssalarie($id_s);

        if (($nbjoursalarie >= $nbjourformation) && ($creditssalarie >= $creditsformation))
        {
            valide($id_f,$id_s);
            usenbjourcredits($nbjourformation,$creditsformation,$id_s);
            header("Location:".BASE_URL."/formationUser?id=".$id_s."");
        }
        else
        {
            echo "<div class='box-body'>
                <div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-ban'></i> Erreur !</h4>
                L'utilisateur ne dispose pas d'assez de crédits ou de jours de formation.
                </div>
                </div>";
        }
	}
	if (isset($_POST['Refuse']))
	{
		$id_f = $_POST['idForm'];

		refuse($id_f,$id_s);

		header("Location:".BASE_URL."/formationUser?id=".$id_s."");
	}

    require "Views/formationUser.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}