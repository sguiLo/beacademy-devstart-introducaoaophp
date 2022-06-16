<?php

$bandas = [
    'Guns N Roses',
    'Mettalica',
    'Dream theater',
    'Iron Maiden',
    'Black Sabbath',
    'Aviões do Forró'
];

echo '<ul>';
    
    foreach ($bandas as $cadaBanda){
        echo '<li>' . $cadaBanda . '</li>';

    }



 /*    for ($n = 0; $n <= 4; $n++){
        echo '<li>' . $bandas[$n] . '</li>';
    } */

echo '</ul>';