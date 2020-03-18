<?php
function faculteit($aantal){
    $faculteit = 1;
    for($i = $aantal; $i > 0; $i--){
        $faculteit *= $i;
    }
    return $faculteit;
}