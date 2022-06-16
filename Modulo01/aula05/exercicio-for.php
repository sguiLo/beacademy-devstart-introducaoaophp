<!-- Exercício 1 -->

<h2>Exercício 1: Data de Nascimento - </h2>
<br><br>


<select>
    <option selected> -- Selecione o Dia --</option>
    <?php

        for ($dia = 1; $dia <= 31; $dia++){
            echo "<option>{$dia}</option>";
        }
    ?>
</select>
<br>
<select>
    <option selected> -- Selecione o Mês --</option>
    <?php

        for ($mes = 1; $mes <= 12; $mes++){
            echo "<option>{$mes}</option>";
        }
    ?>
</select>
<br>
<select>
    <option selected> -- Selecione o Ano --</option>
    <?php

        for ($ano = 2022; $ano >= 1900; $ano--){
            echo "<option>{$ano}</option>";
        }
    ?>
</select>

<br><br>

<h2>Exercício 2: Música créu - </h2>

<!-- Exercício 2 -->

<?php

for ($i=1; $i <=12 ; $i++) { 
    echo "Créeeeeeeu <br>";
}

?>