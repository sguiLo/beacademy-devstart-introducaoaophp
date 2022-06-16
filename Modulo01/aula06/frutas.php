<?php 

$frutas = [
    'Uva',
    'Laranja', //0
    'Banana', //1
    'Abacaxi', //2
];

//Adicionando nova fruta no array 
$frutas[] = 'Maça'; //3

$frutas[10] = 'Melancia';

$frutas[7] = 'Morango';

$frutas [] = 'Tangerina';

?>

<ul>
    <?php 
        for ($i=0; $i <=11; $i++) { 
            echo "<li>{$frutas[$i]}</li>";
        }    
    ?>
</ul>



