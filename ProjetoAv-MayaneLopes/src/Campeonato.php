<?php

namespace projetoav\mayane;

class Campeonato
{
    private string $nome;
    private int $ano;
    private array $times;
    private Campeao $time;

    public function __construct(string $nome, int $ano)
    {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->times = []; //inicialização
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function addTimes($time): void
    {
        array_push($this->times, $time);
    }
    public function getAno(): int
    {
        return $this->ano;
    }

    public function getTimes(): array
    {
        return $this->times;
    }

    public function setCampeao(Campeao $time): void
    {
        $this->time = $time;
    }
    private function validarCapacidade(Time $time): bool
    {
        $capacidadeMinima = 5000; //como não tinha na atividade, eu inventei
        if ($time->getCapacidadeEstadio() >= $capacidadeMinima) {
            echo "O time {$time->getNome()} está apto!";
            return true;
        } else {
            echo "O time {$time->getNome()} não está apto a participar do campeonato.";
            return false;
        }
     }
 
    private function validarInscricao(Time $time): void
    {
        if($this->validarCapacidade($time)) {
            echo "O time {$time->getNome()} está inscrito no campeonato!!";
            $this->addTimes($time); //add ao array
            } else { 
            echo "O time {$time->getNome()} não está inscrito no campeonato :(";
            }
        }
}
