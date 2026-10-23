<?php
include_once(__DIR__ . "/../Model/Aluno.php");
class AlunoService
{


    public function validar(Aluno $aluno)
    {
        $erros = array();

        if ($aluno->getNome() == NULL)
            array_push($erros, "Informe o nome");

        if (! $aluno->getIdade())
            array_push($erros, "Informe a Idade");

        if ($aluno->getEstrangeiro() ==  NULL)
            array_push($erros, "Informe se o Aluno é estrangeiro!");

        if (! $aluno->getCurso()->getId())
            array_push($erros, "Informe o curso");



        return $erros;
    }
}
