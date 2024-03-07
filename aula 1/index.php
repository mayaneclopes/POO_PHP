<?php
require_once 'classes/Carro.php';

$carro = new Carro();
$carro->nome = 'Opala';
$carro->cor = 'Preto';
$carro->modelo = 'Diplomata';

echo "$carro->nome \n";
echo "$carro->cor \n";
echo "$carro->modelo \n";
echo "$carro->velocidadeAtual \n";

$carro->acelerar();
echo "$carro->velocidadeAtual \n";
