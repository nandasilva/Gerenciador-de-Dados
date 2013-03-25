<?php

/**
 * Configs, variaveis e constantes
 */
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'geradorgba');

/**
 * Requires e includes de bibliotecas, etc
 */
require 'vendor/autoload.php';


/**
 * Namespaces
 */
use Slim\Slim;
use Slim\Extras;
use idiorm\idiorm;
use Twig\Twig;

/**
 * Configuração do banco de dados
 * Tudo relacionando os banco deve entrar neste bloco de try/catch
 */
try {
	/**
	 * Conecta com o banco, passando qual o driver (Mysql), host, user e pass e a base da dados
	 */
	ORM::configure( DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE ); // Conexão
	ORM::configure(array(
		'username' => DB_USER, // Nome de usuário do banco
		'password' => DB_PASS, // Senha do usuário do banco
		'driver_options' => array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Converte o resultado para utf-8
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ // Todos os resultados retornaram em object
		)
	));
	/**
	 * Indica qual é a PK de cada tabela !important
	 */
	ORM::configure('id_column_overrides', array(
		'Tabela' => 'Chave Primária'
	));
}
catch ( PDOException $e ) {
	echo $e->getMessage();
	exit;
}


/**
 * Retorna os dados do banco
 * @var object
 */
$db = ORM::get_db();

/**
 * Instancia de objetos
 */

/**
 * Configuração da view e layoyts
 */
$view = new \Slim\Extras\Views\Twig();

$view->appendData(array(
	'separator' => ' | ',
	'files' => array(
		'header' => array(
			'css' => array(
				'bootstrap.min.css',
				'main.css'
			),
			'js' => array(
				'vendor/modernizr-2.6.2.min.js'
			)
		),
		'footer' => array(
			'js' => array(
				'vendor/jquery-1.9.1.min.js',
				'bootstrap.min.js',
				'main.js'
			)
		)
	)
));

// Slim Framework
$app = new \Slim\Slim(array(
	'templates.path' => './application/views/',
	'view' => $view
));


/**
 * Erro 404 - Define um template padrão
 */
$app->notFound(function () use ($app) {
	$app->render('/errors/404.php');
});

/**
 * Routes
 * Le os arquivos que estão na pasta 'routes' e faz o include deles
 * Não é mais necessário ficar fazendo require a cada arquivo novo
 */
foreach( array_diff(scandir('./application/routes'), array('..', '.')) as $routes) {
	require_once './application/routes/' . $routes;
}


/**
 * Run app, run!
 */
$app->run();