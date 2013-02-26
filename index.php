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
	<div data-role="page" id="pagina1">
	<!-- bajo este datarol contendra toda la aplicacion de nuesto jqm -->
	<!-- cabecera -->
		<div data-role="header" data-theme="c">
			<h1>Esto es una cabecera</h1>
			<a href="pagina2.php">Pagina 2</a>
		</div>
	<!-- contenido -->
		<div data-role="content">
			<p>Estas en la pagina 1</p>
			<a href="#confirmar" data-role="button" data-rel="dialog">eliminar</a>
		</div>
	<!-- pie de pagina -->
		<div data-role="footer"><h2>Esto es un pie de pagina</h2></div>
	</div>
	<!-- Cuadro de dialogo -->
	<div data-role="page" id="confirmar">
	<!-- bajo este datarol contendra toda la aplicacion de nuesto jqm -->
	<!-- cabecera -->
		<div data-role="header" data-theme="c">
			<h1>Esto es una cabecera</h1>
		</div>
	<!-- contenido -->
		<div data-role="content">
			<p>Estas por eliminar algo, deseas eliminarlo?</p>
			<a href="#pagina1"  data-role="button" data-rel="back">eliminar</a>
			<a href="#pagina1"  data-role="button" data-rel="back">cancelar</a>
		</div>
	<!-- pie de pagina -->
		<div data-role="footer"><h2>Esto es un pie de pagina</h2></div>
	</div>
</body>
</html> 