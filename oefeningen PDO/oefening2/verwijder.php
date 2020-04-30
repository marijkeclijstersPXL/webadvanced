<?php
require_once 'overzicht.php';
$id=$_GET['id'];
//$naam=$_GET['naam'];

try {
    $pdo = new PDO( "mysql:host=$host;dbname=$database", $user, $password);
    $numberRows = $pdo->exec("DELETE FROM 'gebruiker' WHERE "."'id' LIKE '$id'");
    print("$numberRows" . "verwijderd");
}catch ( PDOException $e ) {
    print 'Exception!: could not connect'. $e-> getMessage();
}
$pdo = null;