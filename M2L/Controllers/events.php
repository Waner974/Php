<?php

function pluralize($string)
{
    preg_match("|^([0-9]+)(.*)|",$string,$matched);
    if($matched[1] > 1) {
        return number_format($matched[1]) . $matched[2] . 's';
    }
    return $string;
}

function calculateDiff($dayDelta, $minuteDelta)
{
    if($dayDelta != 'null' && $dayDelta != '0') {
        if($dayDelta < 0)
            $diff = "-".pluralize(abs(intval($dayDelta))." day");
        else if($dayDelta > 0)
            $diff = "+".pluralize(intval($dayDelta)." day");
    }
    else
        $diff = "";

    if($minuteDelta != 'null' && $minuteDelta != '0') {
        if($minuteDelta < 0)
            $diff .= "-".pluralize(abs(intval($minuteDelta))." minute");
        else
            $diff .= "+".pluralize(intval($minuteDelta)." minute");
    }

    return $diff;
}

$dsn = 'mysql:dbname=m2l;host=localhost';
$user = 'root';
$password = '';

if(isset($_GET['action']))
{
switch($_GET['action'])
{
    case 'get':
        try {
            $db = new PDO($dsn, $user, $password);

            $sql = 'SELECT id_f AS id, libelle AS title, date_d AS start, date_f AS end FROM formation';
            $events = array();

            foreach ($db->query($sql) as $row) {
                $events [] = $row;
            }

            echo json_encode($events);

        } catch (PDOException $e) {
            echo json_encode(array('error' => 'Connection failed: ' . $e->getMessage()));
        }
        break;

    case 'update':
        try {
            $db = new PDO($dsn, $user, $password);

            $query = $db->query('SELECT id_f AS id, libelle AS title, date_d AS start, date_f AS end FROM formation WHERE id = ' . $_POST['id']);
            $event = $query->fetch(PDO::FETCH_ASSOC);

            // Mise a jour de la date
            $diff = calculateDiff($_POST['dayDelta']);

            $newStart = DateTime::createFromFormat('Y-m-d', $event['start']);
            $newStart->modify($diff);

            $newEnd = DateTime::createFromFormat('Y-m-d ', $event['end']);
            $newEnd->modify($diff);

            $sql = 'UPDATE formation SET start = "'.$newStart->format('Y-m-d').'",end = "'.$newEnd->format('Y-m-d').'",WHERE id = ' . $_POST['id'];
            $row = $db->query($sql);

            echo json_encode(array('updated' => true));

        } catch (PDOException $e) {
            echo json_encode(array('error' => 'Db error : ' . $e->getMessage()));
        } catch (Exception $e) {
            echo json_encode(array('error' => $e->getMessage()));
        }
        break;

    default:
        break;
}
}

?>