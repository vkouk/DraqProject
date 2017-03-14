<?php
try {

  $dsn = "mysql:host=localhost;dbname=draqmeddb";
  $adminuser ="draqmedadmin";
  $password= "test1234!@#$";

  $conn= new PDO($dsn,$adminuser, $password);

} catch(PDOException $e) {
    echo "Error!: ". $e->getMessage()."</br>";
}

?>