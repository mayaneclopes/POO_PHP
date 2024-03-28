<?php

namespace projetoav\mayane;

class Turma
{
    private int $ano;
    private string $curso;
    private int $idadeMinimaCurso;
    private array $alunos;

    public function __construct(
        int $ano, 
        string $curso, 
        int $idadeMinimaCurso, 
        array $alunos
    )
    {
        $this->ano = $ano;
        $this->curso = $curso;
        $this->idadeMinimaCurso = $idadeMinimaCurso;
        $this->alunos = [];
    }
    public function getCurso(): string
    {
        return $this->curso;
    }

    public function addAlunos($aluno): void
    {
        array_push($this->alunos, $aluno);
    }
    private function validarMatricula(Aluno $aluno): bool
    {
        $idadeMinimaCurso = 17; //considerei turma de faculdade
        if($aluno->getIdade() >= $idadeMinimaCurso) {
            echo "O aluno {$aluno->getNome()} pode se matricular.";
            return true;
        } else {
            echo "O aluno {$aluno->getNome()} não tem idade suficiente para se matricular no curso.";
            return false;
        }
    }
    private function validarTurmaExtra(): bool
    {
        $maximoAlunos = 30;
        if (count($this->alunos) > $maximoAlunos) {
            echo "Esta turma não tem mais vagas, abra uma turma extra!";
            return true;
        } else {
            return false;
        }
    }
     //Decidi adicionar esta validação extra para que a classe
    //TurmaExtra tenha sentido de existir. A intenção era de que
    //enquanto o número de alunos no array $alunos fosse < 30, nada acontecesse,
    //mas quando o nº se excedesse, uma msg avisasse da necessidade uma turma extra.
}
