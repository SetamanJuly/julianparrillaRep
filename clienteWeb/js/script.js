var URLRep = "http://localhost/julianparrillaRep/public/index.php/";
var URLWeb = "http://localhost/julianparrillaRep/clienteWeb/";

function loginUser(){
	var nameLog = document.getElementById("nameIDLogin");
	var passLog = document.getElementById("passIDLogin");
	if (nameLog.value == "" || passLog.value == ""){
		alert("No se permite ningun campo vacio");
	}else{
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = URLRep+"users/login.json";

		// Definimos los parámetros que vamos a enviar
		var params = "name="+nameLog.value+"&pass="+passLog.value;

		ajax_url += '?' + params;

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();
		// Definimos como queremos realizar la comunicación
		ajax_request.open( "GET", ajax_url, true );

		//Enviamos la solicitud junto con los parámetros
		ajax_request.send();
		
		ajax_request.onreadystatechange = function() {
		    // readyState es 4
		    if (ajax_request.readyState == 4 ) {
		        var jsonObj = JSON.parse( ajax_request.responseText );
				if (jsonObj.code == 201){
					localStorage.setItem("token", jsonObj.token);
					if (nameLog.value == "admin" || passLog.value == "1234"){
						window.location.replace(URLWeb+"mostrarDatos.php");
					}else{
						window.location.replace(URLWeb+"mostrarCanciones.php");
					}
				}else{
					alert(jsonObj.message);
				}
		    }
		}
	}
}

function registerUser(){
	var name = document.getElementById("nameID");
	var pass = document.getElementById("passID");
	var email = document.getElementById("emailID");

	if (name.value == "" || pass.value == "" || email.value == ""){
		alert("No se permite ningun campo vacio");
	}else{
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = URLRep+"users/create.json";

		// Definimos los parámetros que vamos a enviar
		var params = "name="+name.value+"&pass="+pass.value+"&email="+email.value+"&rol=2";

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "POST", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send( params );
		
		ajax_request.onreadystatechange = function() {
		    // readyState es 4
		    if (ajax_request.readyState == 4 ) {
		        var jsonObj = JSON.parse( ajax_request.responseText );
		        alert (jsonObj.message);
		        location.reload();
		    }
		}
	}
}

function addSong(){
	var name = document.getElementById("nameID");
	var artist = document.getElementById("artistID");
	var url = document.getElementById("urlID");

	if (name.value == "" || artist.value == "" || url.value == ""){
		alert("No se permite ningun campo vacio");
	}else{
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = URLRep+"canciones/create.json";

		// Definimos los parámetros que vamos a enviar
		var params = "name="+name.value+"&urlS="+artist.value+"&artista="+url.value;

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "POST", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send( params );
		
		ajax_request.onreadystatechange = function() {
		    // readyState es 4
		    if (ajax_request.readyState == 4 ) {
		        var jsonObj = JSON.parse( ajax_request.responseText );
		        alert (jsonObj.message);
		        location.reload();
		    }
		}
	}
}

function selectUser(id){
	window.location.replace(URLWeb+"formulario.php");
	localStorage.setItem("idCliente", id);
}

function goToAddSong(){
	window.location.replace(URLWeb+"formularioCancion.php");
}

function modifyUser(){
	var pass = document.getElementById("passID");
	if (pass.value == ""){
		alert("No se permite ningun campo vacio");
	}else{
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = URLRep+"users/modify.json";
		// Definimos los parámetros que vamos a enviar
		var params = "pass="+pass.value;
		console.log(params);
		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "POST", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax_request.setRequestHeader("Authorization", localStorage.getItem("token"));
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send( params );
		
		ajax_request.onreadystatechange = function() {
		    if (ajax_request.readyState == 4 ) {
		        var jsonObj = JSON.parse( ajax_request.responseText );
		        alert (jsonObj.message);
		        location.reload();
		    }
		}
	}
}

function getUsers(){			
	var ajax_url = URLRep+"users/users.json";
	var ajax_request = new XMLHttpRequest();
	ajax_request.onreadystatechange = function() {
	    if (ajax_request.readyState == 4 ) {
	        var jsonObj = JSON.parse( ajax_request.responseText );
	        var arr = [];
			for(var i in jsonObj)
			{
			     arr.push(jsonObj [i]);
			}
			for(var i in arr[0])
			{
			    for(var j in arr[i])
				{
			    	var li=document.createElement('li');
                    li.id=arr[0][j];
                    li.innerHTML=arr[0][j]+"<hr>";
                    document.getElementById("listaP").appendChild(li);	
			    }

			    for(var j in arr[i])
				{
			    	var li=document.createElement('li');
                    li.id=arr[1][j];
                    li.innerHTML="<a href=# id='idModificar' onClick='selectUser("+arr[1][j]+")'> Editar </a><br>"+"<hr>";
                    document.getElementById("listaD").appendChild(li);	
			    }

			    for(var j in arr[i])
				{
			    	var li=document.createElement('li');
                    li.id=arr[1][j];
                    li.innerHTML="<a href=# id='idBorrar' onClick='borrarUsuario("+arr[1][j]+")'> Borrar </a><br>"+"<hr>";
                    document.getElementById("listaB").appendChild(li);	
			    }
			    exit;
			}	        
	    }
	}
	ajax_request.open( "GET", ajax_url, true );
	ajax_request.send();		
}

function getSongs(){		
	var ajax_url = URLRep+"canciones/songs.json";
	var ajax_request = new XMLHttpRequest();
	ajax_request.onreadystatechange = function() {
	    if (ajax_request.readyState == 4 ) {
	        var jsonObj = JSON.parse( ajax_request.responseText );
	        var arr = [];
			
			for (var i = jsonObj.data.length - 1; i >= 0; i--) {		    
				console.log(jsonObj.data[i].nameSong);
		    	var li=document.createElement('li');
                li.id=jsonObj.data[i].nameSong;
                li.innerHTML=jsonObj.data[i].nameSong+"<hr>";
                document.getElementById("listaP").appendChild(li);		
			    
		    	var li=document.createElement('li');
                li.id=jsonObj.data[i].id;
                li.innerHTML="<a href=# id='idBorrar' onClick='borrarCancion("+jsonObj.data[i].id+")'> Borrar </a><br>"+"<hr>";
                document.getElementById("listaB").appendChild(li);				    
			}	        
	    }
	}
	ajax_request.open( "GET", ajax_url, true );
	ajax_request.send();		
}

function checkToken()
{
	var ajax_url = URLRep+"users/checkToken.json";
	var ajax_request = new XMLHttpRequest();
	ajax_request.onreadystatechange = function() {
	    if (ajax_request.readyState == 4 ) {
	        jsonObjas = JSON.parse( ajax_request.responseText );
	        var arr = [];
			for(var i in jsonObjas)
			{
			    arr.push(jsonObjas [i]);
			}
			if (arr[1] == true){
				console.log("Bienvenido");
				getUsers();
			}else{
				window.location.replace(URLWeb+"index.php");
			}			
	    }
	}
	ajax_request.open( "GET", ajax_url, true );
	ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax_request.setRequestHeader("Authorization", localStorage.getItem("tokenEjercicio2"));
	ajax_request.send();	
}

function clearToken(){
	localStorage.setItem("token", null);
	window.location.replace(URLWeb+"index.php");
	localStorage.setItem("idCliente", null);
}

function clearTokenIndex(){
	localStorage.setItem("token", null);
	localStorage.setItem("idCliente", null);
}

function getDataUser(){
	// Definimos la URL que vamos a solicitar via Ajax
	var ajax_url = URLRep+"users/singleuser.json";

	// Definimos los parámetros que vamos a enviar
	var params = "id="+localStorage.getItem("idCliente");

	ajax_url += '?' + params;

	// Creamos un nuevo objeto encargado de la comunicación
	var ajax_request = new XMLHttpRequest();
	// Definimos como queremos realizar la comunicación
	ajax_request.open( "GET", ajax_url, true );

	//Enviamos la solicitud junto con los parámetros
	ajax_request.send();
	
	ajax_request.onreadystatechange = function() {
	    // readyState es 4
	    if (ajax_request.readyState == 4 ) {
	        var jsonObj = JSON.parse( ajax_request.responseText );
	        //alert (ajax_request.responseText);
	        var arr = [];
			for(var i in jsonObj)
			{
			    arr.push(jsonObj [i]);
			}
			document.getElementById("nameID").value = arr[0].toString();
			document.getElementById("passID").value = arr[1].toString();
	    }
	}
}

function borrarUsuario(id){
	// Definimos la URL que vamos a solicitar via Ajax
	var ajax_url = URLRep+"users/delete.json";

	// Creamos un nuevo objeto encargado de la comunicación
	var ajax_request = new XMLHttpRequest();

	// Definimos como queremos realizar la comunicación
	ajax_request.open("POST", ajax_url, true );
	// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
	ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	//Enviamos la solicitud junto con los parámetros
	ajax_request.send( "id="+id );
	var respuesta = ajax_request.responseText;
	alert("Usuario borrado");
	location.reload(true);
}

function borrarCancion(id){
	// Definimos la URL que vamos a solicitar via Ajax
	var ajax_url = URLRep+"canciones/delete.json";

	// Creamos un nuevo objeto encargado de la comunicación
	var ajax_request = new XMLHttpRequest();

	// Definimos como queremos realizar la comunicación
	ajax_request.open("POST", ajax_url, true );
	// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
	ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	//Enviamos la solicitud junto con los parámetros
	ajax_request.send( "id="+id );
	var respuesta = ajax_request.responseText;
	alert("Cancion borrada");
	location.reload(true);
}
