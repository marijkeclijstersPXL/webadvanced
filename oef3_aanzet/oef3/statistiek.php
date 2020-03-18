<?php
var_dump($_GET['getallen']);

$som = 0;
$min = 1000;
$max = 0;
$aantalNumeriek = 0;
$nietNumeriek = "";
foreach ($_GET['getallen'] as $getal){

    if (is_numeric($getal)){
        $aantalNumeriek++;
        $som += $getal;
        if ($getal < $min){
            $min = $getal;
        }
        if($getal > $max){
            $max = $getal;
        }
    }else {
        $nietNumeriek .= $getal . ", \n";
    }
}

$gemiddelde = $som / $aantalNumeriek;//count($_GET['getallen']);
print("</br> </br>");
print("Het gemiddelde van de getallen is ". $gemiddelde . "</br>");
print("Het kleinste getal is ". $min . " . </br>");
print("Het grootste getal is " . $max . ". </br>");

print("De niet numerieke waarden zijn: " . $nietNumeriek . "\n");
