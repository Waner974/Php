<?php

require "Models/profil.php";

$id_s= $_SESSION['auth']['id_s'];
$chefequipe = getchefequipe($id_s);

require "Views/profil.php";

?>