<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../Model/Aluno.php");
class AlunoDAO
{

    private Connection $conn;

    public function listar()
    {

        $sql = "SELECT * FROM alunos";
        $conn = Connection::getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //COnverter os dados para objetos -> classe aluno
        $alunos = $this->map($result);

        return $alunos;
    }
    public function map(array $dados)
    {
        $alunos = array();

        foreach ($dados as $d) {
            $aluno = new ALuno();
            $aluno->setId($d["id"]);
            $aluno->setNome($d["nome"]);
            $aluno->setIdade($d["idade"]);
            $aluno->setEstrangeiro($d["estrangeiro"]);




            $curso = new Curso();
            $curso->setId($d["id_curso"]);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }


        return $alunos;
    }
}
