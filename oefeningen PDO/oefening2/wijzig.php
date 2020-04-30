<?php
require_once 'overzicht.php';
$id=$_GET['id'];
$naam=$_GET['naam'];

try {
    $pdo = new PDO( "mysql:host=$host;dbname=$database", $user, $password);
    $numberRows = $pdo->exec("UPDATE 'gebruiker' SET 'naam'=\'$naam\' WHERE 'id' = (int)$id");
    print($numberRows);
}catch ( PDOException $e ) {
    print 'Exception!: could not connect'. $e-> getMessage();
}
$pdo = null;