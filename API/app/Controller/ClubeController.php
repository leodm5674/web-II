<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Dao\ClubeDAO;
use App\Mapper\ClubeMapper;
use App\Service\ClubeService;
use App\Util\MensagemErro;

use \PDOException;

class ClubeController
{

	private ClubeDAO $clubeDAO;
	private ClubeMapper $clubeMapper;
	private ClubeService $clubeService;

	public function __construct()
	{
		$this->clubeDAO = new ClubeDAO();
		$this->clubeMapper = new ClubeMapper();
		$this->clubeService = new ClubeService();
	}

	public function listar(Request $request, Response $response, $args)
	{
		$clubes = $this->clubeDAO->list();
		$json = json_encode(
			$clubes,
			JSON_UNESCAPED_SLASHES,
			JSON_UNESCAPED_UNICODE
		);

		$response->getBody()->write($json);

		return $response->withStatus(200)->withHeader("Content-Type", "application/json")->withStatus(200);
	}

	public function buscar(Request $request, Response $response, $args)
	{
		$id = $args["id"];

		$clube = $this->clubeDAO->findById($id);

		if ($clube) {
			$json = json_encode(
				$clube,
				JSON_UNESCAPED_SLASHES,
				JSON_UNESCAPED_UNICODE
			);

			$response->getBody()->write($json);

			return $response->withStatus(200)->withHeader("Content-Type", "application/json")->withStatus(200);
		} else {
			return $response->withStatus(404);
		}
	}

	public function excluir(Request $request, Response $response, $args)
	{
		$id = $args["id"];

		$clube = $this->clubeDAO->findById($id);

		if ($clube) {
			try {
				$excluir = $this->clubeDAO->deleteById($id);
				return $response->withStatus(204);
			} catch (PDOException $e) {
				$jsonErro = MensagemErro::getJSONErro(
					"Erro ao excluir um clube!",
					$e->getMessage(),
					500
				);

				$response->getBody()->write($jsonErro);

				return $response->withHeader("Content-Type", "application/json")
					->withStatus(404);
			}
		} else {
			return $response->withStatus(404);
		}
	}



	public function update(Request $request, Response $response, $args) {}

	public function inserir(Request $request, Response $response, $args)
	{
		$clubeArrayAssoc = $request->getParsedBody();
		$clube = $this->clubeMapper->mapFromJsonToObject($clubeArrayAssoc);

		$erro = $this->clubeService->validar($clube);
		if (! $erro) {
			try {
				$clube = $this->clubeDAO->insert($clube);
				$response->getBody()->write(json_encode(
					$clube,
					JSON_UNESCAPED_SLASHES,
					JSON_UNESCAPED_UNICODE
				));
				return $response->withHeader("Content-Type", "application/json")->withStatus(201);
			} catch (PDOException $e) {
				$jsonErro = MensagemErro::getJSONErro(
					"Erro ao inserir um clube!",
					$e->getMessage(),
					500
				);

				$response->getBody()->write($jsonErro);

				return $response->withHeader("Content-Type", "application/json")->withStatus(500);
			}
		} else {
			$erroJson = MensagemErro::getJSONErro($erro, $erro, 400);
			$response->getBody()->write($erroJson);

			return $response->withHeader("Content-Type", "application/json")->withStatus(400);
		}


		$response->getBody()->write(print_r($clube, true));
		return $response;
	}
}
