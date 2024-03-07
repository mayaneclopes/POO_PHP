<?php

$numero = readline('Informe um número inteiro: ');

$par = $numero % 2 == 0;

if($par) {
    echo 'O número é par';
} else { 
    echo 'O número é ímpar';
}