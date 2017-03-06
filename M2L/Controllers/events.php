<?php
// liste des événements
$json = array();
// requête qui récupère les événements
$requete = "SELECT * FROM evenement ORDER BY id";

// connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');
} catch(Exception $e) {
    exit('Impossible de se connecter à la base de données.');
}
// exécution de la requête
$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

// envoi du résultat au success
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));


/*$dsn = 'mysql:dbname=m2l;host=localhost';
$user = 'root';
$password = '';

if(isset($_GET['action']))
{
    switch($_GET['action'])
    {
        case 'get':
            try {
                $db = new PDO($dsn, $user, $password);

                $sql = 'SELECT * FROM evenement';
                $events = array();

                foreach ($db->query($sql) as $row) {
                    $events[] = $row;
                }

                echo json_encode($events);

            } catch (PDOException $e) {
                echo json_encode(array('error' => 'Connection failed: ' . $e->getMessage()));
            }
            break;
        default:
            break;
    }
}*/

?>