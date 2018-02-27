<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/combined.css">
	<link rel="shortcut icon" href="./favicon.ico" />
 	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<title>FuelPHP Juli</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js"></script>	
	<style type="text/css">
		ul
		{
		list-style-type: none;
		}
	</style>
</head>
<body>
	<h1> Lista de canciones </h1>
    <br>
	<div class="row">	       
        <div class="col-md-6 col-sm-6"> 
        	<h3>Canciones</h3>         	
        	<ul id="listaP"></ul>  
        </div>
        <div class="col-md-6 col-sm-6"> 
        	<h3>Borrar</h3>         	
        	<ul id="listaB"></ul>  
        </div>

        <div class="col-md-12 col-sm-12">
        <button style="margin-left: 20px" class="btn" onclick="clearToken();">Atras</button>
        <button style="margin-left: 20px" class="btn" onclick="goToAddSong();">Crear cancion</button>		
        </div>  	

	</div>
	<script type="text/javascript">
		getSongs();
		checkToken();
	</script>
</body>
</html>
