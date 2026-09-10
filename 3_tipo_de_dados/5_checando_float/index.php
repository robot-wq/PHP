<?php

$a  =  "teste";
$b  = 12.8;

if(is_float($a)){
    echo "É um float 1! <br>";
} 

if(is_float($b)){
    echo "É um float 2! <br>";

} 

if(is_float(6565.62)){
    echo "É um float 3! <br>";
} 

if(is_float("teste")){
    echo "É um float 4! <br>";
} 