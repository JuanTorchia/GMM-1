<?php

$username = 'givememoney';
$password = 'Mario456luis$';
$dsn = 'mysql:host=localhost; dbname=esp_data';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>
