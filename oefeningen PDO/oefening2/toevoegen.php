<?php
require_once 'overzicht.php';
$id=(int)$_GET['id'];
$naam=$_GET['naam'];

try {
    $pdo = new PDO( "mysql:host=$host;dbname=$database", $user, $password);
    $numberRows = $pdo->exec("INSERT INTO 'gebruiker' ('id', 'naam') VALUES ($id, '$naam')");
    print($numberRows);
}catch ( PDOException $e ) {
    print 'Exception!: could not connect'. $e-> getMessage();
}
$pdo = null;
