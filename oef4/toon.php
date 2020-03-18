<?php
require_once ('verwerking.php');
$naam = $_COOKIE['name'];
$achtergrondkleur = $_COOKIE['color'];

echo $naam;
echo '<body bgcolor = "$achtergrondkleur">';
