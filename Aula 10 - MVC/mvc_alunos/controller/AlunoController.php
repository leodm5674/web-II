<?php

include_once(__DIR__ . "/../dao/AlunoDAO.php");
include_once(__DIR__ . "/../Model/Aluno.php");
include_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController
{

    private AlunoDAO $alunoDao;
    private AlunoService $alunoService;


    public function __construct()
    {
        $this->alunoDao = new AlunoDAO();
        $this->alunoService = new AlunoService();
    }

    public function listar()
    {
        return  $this->alunoDao->listar();
    }

    public function buscarPorId(int $id): ?Aluno {
        
        return $this->alunoDao->buscarPorId($id);

    }



    public function inserir(Aluno $aluno)
    {
        $erros = $this->alunoService->validar($aluno);
        if (empty($erros)) {
            $msgErro = $this->alunoDao->inserir($aluno);
            if ($msgErro)
                array_push($erros, $msgErro);
        }
        return $erros;
    }
    
    public function alterar(Aluno $aluno){
          $erros = $this->alunoService->validar($aluno);
        if (empty($erros)) {
            $msgErro = $this->alunoDao->alterar($aluno);
            if ($msgErro)
                array_push($erros, $msgErro);
        }
        return $erros;

    }

    public function excluir(int $idAluno)
    {
        $this->alunoDao->excluir($idAluno);
    }
}
