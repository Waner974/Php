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
		valide($id_f,$id_s);
		header("Location:".BASE_URL."/formationUser?id=".$id_s."");
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