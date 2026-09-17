<?php

$str = "Paulo";
$num = 12;

if(is_string ($str)){
    echo "$str é uma string 1<br>";
}

if(is_string ($num)){
    echo "$str é uma string 2<br>";
}

if(is_string ("asd")){
    echo "$str é uma string 3<br>";
}