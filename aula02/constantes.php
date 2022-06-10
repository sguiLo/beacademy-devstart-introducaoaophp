<?php
//Maneiras de definir constantes
//Não podem ter espaços em brancos assim como variáveis.


define('CPF', '123.123.123-12');

const NOME_COMPLETO = 'Chiquim da Silva'; //Dica e regra: crie constantes sempre utilizando o nome todo em letras Maiúsculas.
//Utilize o UNDERLINE para separar palavras já que o CamelCase não se encaixa na constante.

echo 'Meu nome é ' . NOME_COMPLETO;