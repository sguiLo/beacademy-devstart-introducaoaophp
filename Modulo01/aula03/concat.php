<?php 

$nome = "Gustavo";
$sobrenome = "Oliveira";
$idade = 100;
$cidade = "Fortaleza";

$nome2 = "Chiquim";
$nome2 .= "da Silva";  //Chiquimda Silva

echo $nome . " " . $sobrenome;

echo "Eu me chamo " . $nome . " " . $sobrenome . " tenho " . $idade . " anos e moro em " . $cidade;


echo "<br>";

echo "Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em {$cidade}";

