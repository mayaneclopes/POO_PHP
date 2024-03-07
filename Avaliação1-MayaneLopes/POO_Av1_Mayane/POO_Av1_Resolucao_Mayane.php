<?php

class Turma 
{
    private int $ano;
    private string $curso;
    private int $idadeMinimaCurso;
    private array $alunos = [];

    public function __construct(int $ano, string $curso, int $idadeMinimaCurso, array $alunos)
    {
        $this->ano=$ano;
        $this->curso=$curso;
        $this->idadeMinimaCurso=$idadeMinimaCurso;
        $this->alunos=$alunos;
    }

    public function matricular(Aluno $aluno)
    {
        if ($this->validarMatricula($aluno)) {
            $this->alunos[] = $aluno;
            return true;
        } 
        return false; 
    }
    
    //mudanças no método p/ Ex.5
    private function validarMatricula(Aluno $aluno): bool 
    {
    return $aluno->getIdade() >= $this->idadeMinimaCurso;
    }
    //fim
    
    public function getAlunos(): array {
        return $this->alunos;
    }

    public function getCurso(): string {
        return $this->curso;
    }

    public function getIdadeMinimaCurso(): int {
        return $this->idadeMinimaCurso;
    }
}

class Aluno {
    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome=$nome;
        $this->idade=$idade;
    }
    
    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

class Materias {
    private string $nomeMateria;
    private string $professor;
    private int $diaSemana;
}

public function __construct(string $nomeMateria, string $professor, int $diaSemana)
{
    $this->nomeMateria=$nomeMateria;
    $this->professor=$professor;
    $this->diaSemana=$diaSemana
}

public function presenca(bool $presente)
{
    if($presente) {
        return "Aluno presente na aula ($this->nomeMateria)";
    } else { 
        return "Aluno faltou na aula ($this->nomeMateria)";
    }
}

}

