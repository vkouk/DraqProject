<?php
/**
 * Created by PhpStorm.
 * User: Dragoness_crysta
 * Date: 25/4/2017
 * Time: 4:46
 */

require_once 'core/init.php';

$conn = DB::getInstance();
$stmt = $conn->prepare("SELECT family_history, ROUND((COUNT(family_history)/ (SELECT COUNT(*) FROM `diabdata`))*100) AS historyPercentage FROM `diabdata` GROUP By family_history");
$list = $stmt->execute();

$history_list = array();

while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

    $historyPercent = new StdClass;

    $historyPercent->family_history = $row[0];
    $historyPercent->historyPercentage = $row[1];

    array_push($history_list, $historyPercent);

}

$conn = null;

echo json_encode($history_list);
?>