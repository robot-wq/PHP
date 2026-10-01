<?php

function teste(){

$a = 0;
$a++;

echo "$a <br>";

}

teste();
teste();
teste();

function testeestatic(){

static $a = 0;
$a++;

echo "$a <br>";

}

testeestatic();
testeestatic();
testeestatic();