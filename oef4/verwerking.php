<?php
$naam=$_GET['name'];
$kleur= $_GET['color'];
setcookie('name', $naam, 'color', $kleur);

