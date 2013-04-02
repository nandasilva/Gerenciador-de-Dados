<?php

// Lsta todas as empresas
$app->get('/empresa', function() use($app) {
	$empresas = new EmpresaController();

	$app->render('/empresa/ListarEmpresasView.php', array(
		'template' => array(
			'titulo' => 'Empresas'
		),
		'content' => array(
			'title' => 'Todas as empresas'
		),
		'empresas' => $empresas->listarEmpresas()
	));
});

$app->get('/empresa/:id_empresa', function($id_empresa) use($app, $db) {
	// Instancia o objeto
	$empresa = new EmpresaController();

	// Recupera os dados da empresa através do método
	$empresa = $empresa->verEmpresa( (int) $id_empresa);

	$app->render('/empresa/VerEmpresasView.php', array(
		'template' => array(
			'titulo' => ($empresa->NomeEmpresa) ? 'Empresa - ' . $empresa->NomeEmpresa : 'A empresa não foi localizada.'
		),
		'content' => array(
			'title' => 'Empresa...'
		),
		'empresa' => $empresa
	));
});



