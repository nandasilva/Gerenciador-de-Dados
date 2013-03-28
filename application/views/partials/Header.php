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

<body>
	<!-- Menu de navegação no topo da página -->
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
	    <div class="container wrap">
	 
	      <a class="brand" href="#">Gerenciador de Dados</a>
		    <ul class="nav">
		    	<li class="active divider-vertical"><a href="#">Empresas</a></li>
		      	<li class="divider-vertical"><a href="#">Vendors</a></li>
		    </ul>

		    <form class="navbar-search pull-left">
			  	<input type="text" class="search-query" placeholder="Pequisar">
			</form>
	 
	 
	      <!-- Everything you want hidden at 940px or less, place within here -->
	      <div class="nav-collapse collapse">
	        <!-- .nav, .navbar-search, .navbar-form, etc -->
	      </div>
	 
	    </div>
	  </div>
	</div>