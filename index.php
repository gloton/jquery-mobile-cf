<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<link rel="styleSheet" href="js/jquery.mobile-1.3.0/jquery.mobile-1.3.0.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="js/jquery.mobile-1.3.0/jquery.mobile-1.3.0.js" ></script>
<title>Curso de jQuery Mobile</title>
</head>

<body>
<!-- primera pagina -->
<div data-role="page">
<!-- bajo este datarol contendra toda la aplicacion de nuesto jqm -->
<!-- cabecera -->
	<div data-role="header" data-theme="c">
		<h1>Esto es una cabecera</h1>
	</div>
<!-- contenido -->
	<div data-role="content">
		<a href=”#a”  data-role="button" data-theme="a" data-inline="true">botón</a>
		<a href=”#a”  data-role="button" data-theme="b" data-inline="true">botón2</a>
	</div>
<!-- pie de pagina -->
	<div data-role="footer"><h2>Esto es un pie de pagina</h2></div>
</div>
</body>
</html> 