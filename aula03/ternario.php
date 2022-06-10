<?php

$idade = 21;

echo $idade >= 18 ? "de maior" : "de menor" ;

echo "<br>";

$nome= 'Ale';
// echo isset($nome) ? $nome : 'nome não definido';

echo $nome ?? 'nome não definido';