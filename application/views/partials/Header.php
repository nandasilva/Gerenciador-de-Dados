<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>{{ title ? title ~ separator }}Gerenciador de Dados</title>
		<meta name="viewport" content="width=device-width">

		{% for css in files.header.css %}
			<link rel="stylesheet" href="/public/css/{{ css }}">
		{% endfor %}

		{% for js in files.header.js %}
			<script src="/public/js/{{ js }}"></script>
		{% endfor %}
	</head>

	<body class="wrap">
		<!-- Menu de navegação no topo da página -->
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Title</a>
    <ul class="nav">
      <li class="active"><a href="#">Empresas</a></li>
      <li><a href="#">Vendors</a></li>
    </ul>
  </div>
</div>

