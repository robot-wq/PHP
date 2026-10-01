<?php

$teste = "asd";

echo "$teste global 1 <br>";

if(5 > 2){

    $teste = "dsa";

    echo "$teste if <br>";

}

echo "$teste global 2 <br>";

function testandoGlobal(){

    $teste = "xsxs";

    echo ("$teste global função <br>");

}

testandoGlobal();

echo "$teste global 3 <br>";