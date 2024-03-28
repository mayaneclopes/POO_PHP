<?php

namespace projetoav\mayane;

class Campeao
{
    private string $nomeCampeao;
    private int $anoCampeonato;

    public function __construct(
        string $nomeCampeao,
        int $anoCampeonato
    ) {
        $this->nomeCampeao = $nomeCampeao;
        $this->anoCampeonato = $anoCampeonato;
    }

    public function getNomeCampeao(): string
    {
        return $this->nomeCampeao;
    }

    public function getAnoCampeonato(): int
    {
        return $this->anoCampeonato;
    }
}

//utilizei apenas getters já que a modificação está em Campeonato.