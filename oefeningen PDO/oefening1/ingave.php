<?php
$databases = array();
$host = '192.168.33.22';
$user = 'root';
$password = 'root';
$database = '';
$pdo = null;

try{
    $pdo = new PDO( "mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->query("SHOW DATABASES");
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    while($row= $statement->fetch()){
        $databases[] = $row['Database'];
    }
?>
<form action="verwerking.php" method="get">
    <h1>Databank</h1>
    <select name="select_database">
        <?php
            for($i = 0; $i <count($databases); $i++){
                print('<option>'.$databases($i).'</option>');
            }
        ?>
    </select>
    <br />
    <p>SQL-query(DROP, DELETE en TRUNCATE zijn niet toegelaten)</p>
    <textarea name="SQLInput" cols="40" rows="5">
        <?php
            try{
                $pdo = new PDO( "mysql:host=$host;dbname='voorbeeld_a'", $user, $password);
                $statement = $pdo->query('SELECT * from werknemers');
                while($row = $statement->fetch()){
                    print($row['id'] . " " . $row['firstName']. " " . $row['lastName']. " " . $row['aantal']);
                    print('<br/>');
                }
            }catch (PDOException $e) {
                print 'Exception!: could not connect'. $e->getMessage();
            }
        ?>

    </textarea>
    <input type="submit" value="bevestig">
    </form>

    <?php
    }catch (PDOException $e) {
        print 'Exception!: could not connect'. $e->getMessage();
}
$pdo= null;
?>