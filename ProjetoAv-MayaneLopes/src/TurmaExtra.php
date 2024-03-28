<?php

namespace projetoav\mayane;

class TurmaExtra
{
    private string $curso;
    private int $ano;
    private array $alunos;

    public function __construct(
        string $curso, 
        int $ano
                )
    {
        $this->curso = $curso;
        $this->ano = $ano;
        $this->alunos = [];
    }
    public function getCurso(): string
    {
        return $this->curso;
    }

    public function getAno(): int
    {
        return $this->ano;
    }
    public function addAlunos($aluno): void
    {
        array_push($this->alunos, $aluno); //alimentar o array
    }
    public function validarMatricula(Aluno $aluno): bool
    {
        $idadeMinima = 17; //considerei turma de faculdade
        if($aluno->getIdade() >= $idadeMinima) {
            echo "O aluno {$aluno->getNome()} pode se matricular.";
            return true;
        } else {
            echo "O aluno {$aluno->getNome()} não tem idade suficiente para se matricular no curso.";
            return false;
        }
    }
}
