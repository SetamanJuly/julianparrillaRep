<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/combined.css">
	<link rel="shortcut icon" href="./favicon.ico" />
 	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<title>FuelPHP Juli - Agregar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js"></script>	
	<script type="text/javascript">getDataUser();</script>
</head>
<body>
	<h1> Añadir canciones </h1>    
	<div class="form-group">
		<div style="margin-bottom: 20px; width: 280px ; margin-top: 20px;" class="form-group">
			<h3> Nombre </h3>	
			<input class="form-control" type="text" id="nameID" name="nameID" required=" ">
			<h3> Artista </h3>	
			<input class="form-control" type="text" id="artistID" name="artistID" required=" ">
			<h3> URL </h3>	
			<input class="form-control" type="text" id="urlID" name="urlID" required=" ">
		</div>
		<a href="http://localhost/julianparrillaRep/clienteWeb/mostrarCanciones.php" class="btn btn-default">Atras</a>
		<a href=# id='idModificar' class="btn btn-default" onClick="addSong()">Añadir</a>
	</div>	 	
	</div>
</body>
</html>
