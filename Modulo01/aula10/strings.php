<?php 

$nome = 'gustavo';
$sobrenome = 'OLIVEIRA';

$nome2 = 'chiquim da silva';

echo "Nome: " . ucfirst($nome) . PHP_EOL;

echo "Sobrenome: " . ucfirst(strtolower($sobrenome)) . PHP_EOL;

echo "Nome2: " . ucwords($nome2);