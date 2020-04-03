<?php
if (!ctype_digit($_GET['day']) || !ctype_digit($_GET['month']) || !ctype_digit($_GET['year'])  ) {
    header("Location: invoer.html");
}
$day = (int) $_GET['day'];
$month = (int) $_GET['month'];
$year = (int) $_GET['year'];
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Verwerk</title>
</head>
<body>
    <?php
    require_once 'src/Util/DateException.php';
    require_once 'src/Util/Date.php';

    use Util\Date;
    use Util\DateException;
    try{
        $date = new Date($day, $month, $year);
        $date1 = Date::make();
        $date2 = Date::make(1,2);
        $date3 = Date::make(1, 2, 2001);
        $date4 = $date->changeDay(2);
        echo $date1;
        echo $date2;
        echo $date3;
        echo $date4;
        var_dump($date);
    } catch (DateException $dateException){
        var_dump($dateException);
    }
?>
</body>
</html>
