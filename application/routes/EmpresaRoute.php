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
		'empresas' => $empresas
	));
});


