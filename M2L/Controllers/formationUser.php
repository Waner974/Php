<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/admin.php";
    require "Models/formationUser.php";

    $id = $_GET['id'];
    $listeFormation = getFormationsUser($id);
    $_GET['p'] = 'chef';

    if (isset($_POST['Valide']))
	{
		$id_f = $_POST['idForm'];
		valide($id_f);
		header("Location:".BASE_URL."/formationUser?id=".$id."");
	}
	if (isset($_POST['Refuse']))
	{
		$id_f = $_POST['idForm'];
		refuse($id_f);
		header("Location:".BASE_URL."/formationUser?id=".$id."");
	}

    require "Views/formationUser.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}