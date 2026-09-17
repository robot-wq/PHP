<?php

$pessoa = [
    'nome' => 'Paulo',
    'idade' => 20,
    'profissao' => 'Programador',
    'Graduacao' => 'ads'
];

$maioridade = 18;

// desafio
if($pessoa['idade'] >= $maioridade){
    echo"A pessoa é maior de idade";
}