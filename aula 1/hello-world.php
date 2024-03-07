<?php
require_once 'classes/Carro.php';

$Carro = new Carro();
$Carro->nome = 'Opala';
$Carro->cor = 'Preto';
$Carro->modelo = 'Diplomata';

echo "$Carro->nome/n";
echo "$Carro->cor/n";
echo "$Carro->modelo";

/*$saudacao = 'Hello';
$nome = readline('Informe seu nome: ');
$horaAtual = date_create();
$dataFormatada = date_format($horaAtual, 'd/m/Y');
echo "$saudacao, $nome hoje é $dataFormatada";*/