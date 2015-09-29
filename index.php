<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema Tesorería</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./static/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./static/css/bootstrap/css/signin.css" rel="stylesheet">
	<link rel="icon" href="../../favicon.ico">
</head>
<body>
	
	
	<div class="container">

	      <form action="/home/" class="form-signin">

	        <h2 class="form-signin-heading center"><img src="./static/img/logo_vim.png" alt="logo"></h2>
	        <label for="inputEmail" class="sr-only">Usuario del Sistema</label>
	        <input type="text" id="inputEmail" class="form-control" placeholder="Usuario del Sistema" required="" autofocus="">
	        <label for="inputPassword" class="sr-only">Contraseña</label>
	        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
	        <div class="checkbox center">
	          <label>
	            <input type="checkbox" value="remember-me"> Recordar contraseña
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
	      </form>

	</div>

</body>
</html>