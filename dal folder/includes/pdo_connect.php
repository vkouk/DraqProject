<?php
try {

  $dsn = "mysql:host=db24.papaki.gr:3306;dbname=n91264atha_diabetesdb";
  $adminuser ="n9126_diabadmin";
  $password= "diab9#ad2Cq5&";

  $conn= new PDO($dsn,$adminuser, $password);

} catch(PDOException $e) {
    echo "Error!: ". $e->getMessage()."</br>";
}

?>