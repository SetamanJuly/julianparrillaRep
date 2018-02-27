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
</head>

<body style="margin-left: 20px">
	<script type="text/javascript">clearTokenIndex();</script>
	<h2> Login usuario </h2>    
	<div class="form-group">
		<div style="margin-bottom: 20px; width: 280px ; margin-top: 20px;" class="form-group">
			<h4> Usuario </h4>	
			<input class="form-control" type="text" id="nameIDLogin" name="name">
			<h4> Contraseña </h4>	
			<input class="form-control" type="password" id="passIDLogin" name="pass">
		</div>
		<a href="javascript:loginUser()" class="btn btn-default">Acceder</a>
	</div>	
	<hr>
	<h2> Registrar usuario </h2>    
	<div class="form-group">
		<div style="margin-bottom: 20px; width: 280px ; margin-top: 20px;" class="form-group">
			<h4> Usuario </h4>	
			<input class="form-control" type="text" id="nameID" name="name">
			<h4> Contraseña </h4>	
			<input class="form-control" type="password" id="passID" name="pass">
			<h4> Email </h4>	
			<input class="form-control" type="text" id="emailID" name="email">
		</div>
		<a href="javascript:registerUser()" class="btn btn-default">Registrar</a>
	</div>	 	
	</div>
</body>

</html>
