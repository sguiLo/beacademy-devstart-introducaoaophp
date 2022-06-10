<?php 

$bandas = [
    ['Rage Against the Machine', 4],
    ['Nirvana', 1],
    ['Queen', 3],
    ['Dire Straits', 2]
];

?>
<table>
    <tr>
        <th>Bandas de rock</th>
        <th>Músicas que conheço</th>
    </tr>
    <tr>
        <?php 
        for ($i = 0; $i <= 3; $i++){
            echo "<tr><td align=center>{$bandas[$i][0]}</td>
                <td align=center>{$bandas[$i][1]}</td></tr>";
        }
        ?>    
    </tr>
</table>