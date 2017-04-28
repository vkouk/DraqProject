<?php
/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 24/4/2017
 * Time: 20:46
 */

require_once 'core/init.php';

$conn = DB::getInstance();
$stmt = $conn->prepare("SELECT `region`, AVG(risk) AS `riskAvg` FROM `diabdata` GROUP BY `region` ORDER BY `region`");
$list = $stmt->execute();

$risk_list = array();

while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
    $riskByRegion = new stdClass;

    $riskByRegion->region = $row[0];
    $riskByRegion->riskAvg= $row[1];

    array_push($risk_list, $riskByRegion);

}

$conn=null;

echo json_encode($risk_list);