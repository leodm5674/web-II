<?php

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "localhost");
define("DB_NAME", "db_crud");
define("DB_USER", "root");
define("DB_PASSWORD", "bancodedados");

//constante para url do sistema
define("BASE_URL", "/mvc_alunos_login");

//Constantes para os dados da sessao
define("USU_LOGADO_ID", "usuarioLogadoId");
define("USU_LOGADO_NOME", "usuarioLogadoNome");