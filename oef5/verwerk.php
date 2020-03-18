<?php
require_once ('wiskunde.php');
$aantal=$_GET['aantal'];

if(ctype_digit($aantal) && $aantal >= 0){
  $resultaat = faculteit($aantal);
  print($resultaat);
}else {
    $resultaat = "foutieve waarde";
    print($resultaat);
}

