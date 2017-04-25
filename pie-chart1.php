<?php
/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 25/4/2017
 * Time: 3:39
 */

require_once 'core/init.php';

$conn = DB::getInstance();
$stmt = $conn->prepare("SELECT gender, ROUND((COUNT(gender)/ (SELECT COUNT(*) FROM `diabdata`))*100) AS percentage FROM `diabdata` GROUP By gender");
$list = $stmt->execute();

$gender_list = array();

while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

    $genderPercent = new StdClass;

    $genderPercent->gender = $row[0];
    $genderPercent->percentage = $row[1];

    array_push($gender_list, $genderPercent);

}

$conn = null;

 echo json_encode($gender_list);
?>