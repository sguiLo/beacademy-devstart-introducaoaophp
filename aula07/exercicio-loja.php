<?php 

$produto1 = [
    'nome' => 'Processador AMD Ryzen 7 5700G',
    'descricao' => '3.8GHz (4.6GHz Max Turbo), AM4, Vídeo Integrado',
    'preco' => 'R$ 1.799,90',
    'foto' => '<img width="150px" height="100px" src="./imgs/processador-amd-ryzen-7.jpg">',
];

$produto2 = [
    'nome' => 'Smart TV Samsung 55´ 4K QLED 55Q80A',
    'descricao' =>'120Hz, Processador IA, HDR10+, Tela Infinita',
    'preco' =>'R$ 4.299,00',
    'foto' =>'<img width="150px" height="100px" src="./imgs/smart-tv-samsung.jpg">',
];

$produto3 = [
    'nome' => 'Headset Gamer Havit',
    'descricao' =>'Drivers 53mm - HV-H2002D',
    'preco' =>'R$ 199,90',
    'foto' =>'<img width="150px" height="100px" src="./imgs/headset-gamer-havit.jpg">',
];

$produto4 = [
    'nome' => 'SSD Kingston A400',
    'descricao' =>'480GB, SATA, Leitura 500MB/s, Gravação 450MB/s',
    'preco' =>'R$ 299,90',
    'foto' =>'<img width="150px" height="100px"src="./imgs/ssd-kingston.jpg">',
];

$produto5 = [
    'nome' => 'Console Microsoft Xbox Series S',
    'descricao' =>'512GB, Branco - RRS-00006',
    'preco' =>'R$ 2.249,90',
    'foto' =>'<img width="150px" height="100px" src="./imgs/xbox-series-s.jpg">',
];

$produtos = [
    $produto1,
    $produto2,
    $produto3,
    $produto4,
    $produto5,
];

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="table-responsive container">
    <h1 class="mt-5" align="center"> Carrinho </h1>
    <hr>
    <table class="table table-hover table-striped mt-5 table-success table align-middle">
    <thead class="table-dark">
            <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>  
            <th>Imagem</th>  
            </tr>
    </thead>
    <tbody>
            <?php 
                foreach ($produtos as $cadaProduto) {
                    echo '<tr>';
                        echo '<td>' . $cadaProduto['nome'] .'</td>';
                        echo '<td>' . $cadaProduto['descricao'] .'</td>';
                        echo '<td>' . $cadaProduto['preco'] .'</td>';
                        echo '<td>' . $cadaProduto['foto'] .'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>



    </table>
</div>














