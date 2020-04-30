<?php
$user="root";
$password="root";
$database="gebruikers";
$pdo=null;
$host = 'localhost';
$options =
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO( "mysql:host=$host;dbname=$database", $user, $password);
    $statement = $pdo->query('SELECT * from gebruiker');
    while($row = $statement->fetch()){
        print($row['id'] . ". " . $row['naam']);
        print('<br/>');
    }
?>
    <h2>Toevoegen van gebruiker</h2>
    <form action="toevoegen.php">
        Id: <input type="text" name="id"/> </br>
        Naam: <input type="text" name="naam"/>
        <input type="submit">
    </form>
    <h2>Wijzigen van gebruiker</h2>
    <form action="wijzig.php">
        Id: <input type="text" name="id"/> </br>
        Naam: <input type="text" name="naam"/>
        <input type="submit">
    </form>
    <h2>Verwijderen van gebruiker</h2>
    <form action="verwijder.php">
        Id: <input type="text" name="id"/> </br>
        Naam: <input type="text" name="naam"/>
        <input type="submit">
    </form>
    
<?php
}catch ( PDOException $e ) {
    print 'Exception!: could not connect'. $e-> getMessage();
}
$pdo = null;
?>


