<?php

namespace projetoav\mayane;

require_once 'vendor/autoload.php';

$campeonato = new Campeonato('Interclasse', 2024);

$timeUm = new Time('Tibbers', 'Bear', 'Toca do Urso', 1000);
$timeDois = new Time('Abelha', 'Ferroada', 'Colmeia', 3000);

$campeonato->validarCapacidade($timeUm);
$campeonato->validarInscricao($timeUm);
$campeonato->validarCapacidade($timeDois);
$campeonato->validarInscricao($timeDois);