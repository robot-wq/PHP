<?php

// Não é case sensitive, mas é uma boa prática manter o padrão lowercase para funções e keywords do PHP.
echo "Teste <br>";
echo "Teste 2 <br>";
ECHO "Teste 3 <br>";

//É case sensitivE
$nome = "Paulo";
$NOME = "Teste";

echo $nome;
echo "<br>";
echo $NOME; // Não vai funcionar, pois a variável é case sensitive