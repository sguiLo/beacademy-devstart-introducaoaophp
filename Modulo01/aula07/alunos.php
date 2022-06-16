<?php

$a1 = [
    'nome' => 'Chiquim ' , 
    'email' => 'chiquim@email.com' , 
    'telefone'=> '85 9 8889-0000',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ]
];

$a2 = [
    'nome' => 'Maria',
    'email' => 'maria@email.com',
    'telefone' => '85 9 9999-0000',
    'notas' => [
        8,
        7.8,
        10,
        7
    ]
];

$a3 = [
    'nome' => 'Zezim',
    'email' => 'zezim@email.com',
    'telefone' => '85 9 9479-2157',
    'notas' => [
        8,
        7.8,
        10,
        7
    ]
];

$a4 = [
    'nome' => 'Luiza',
    'email' => 'luiza@email.com',
    'telefone' => '85 9 8699-0840',
    'notas' => [
        8,
        7.8,
        10,
        7
    ]
];


$alunos = [ //Dimensao 1 
    $a1,
    $a2,
    $a3,
    $a4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5"> Alunos </h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Cidade</th>  
            <th>Notas</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($alunos as $cadaAluno) {
                    echo '<tr>';
                        echo '<td>' . $cadaAluno['nome'] .'</td>';
                        echo '<td>' . $cadaAluno['email'] .'</td>';
                        echo '<td>' . $cadaAluno['telefone'] .'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
