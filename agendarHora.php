


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
    <a href="lib/atencion.php"></a>
        
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Agendar hora</title>
        <a href="verificaHora.php"></a>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inicio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <u1 class="nav navbar-nav navbar-right">
                        <li><a href="cancelarHora.php">Cancelar hora</a></li>
                    </u1>
            </div>
        </nav>
        
        
      
               
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js.js"></script>
    </body>
</html>

<html>
	<head>
		<title>Formulario</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<div class="form">
                    <center><h1><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Agendar hora</h1></center>
                    <form action="verificaHora.php" method="POST">                              
				<p>Rut paciente</p>
				<input type="text" name="rut" placeholder="Rut paciente" required>
                                <br>
                                <br>
                                <p>Fecha</p>
				<input type="text" name="fecha" placeholder="Fecha" required>
                                <br>
                                <br>
				<p>Hora</p>
				<input type="text" name="hora" placeholder="Hora">
				<br>
                                <br>
				<p>Rut medico</p>
				<input type="text" name="rutm" placeholder="Rut medico" required>
                                <br>
				<br>
				<input type="submit" value="Agendar">
                                <br>
                                <br>
			</form>
                        <form action="index.php" method="POST" style="display:inline">
                            <input type="submit" value="Volver">
                        </form>
		</div>
	</body>
</html>

<style>
   .form{
	position:relative;
	width:500px;
	height:600px;
	padding-left: 20px;
	padding-top: 15px;
	background-color:#F51414;
	border-radius: 20px;
	margin:auto;
}

input[type=text],[type=rut],[type=fecha],[type=hora],[type=rutm]{
	width:470px;
	height:35px;
	font: 14px normal normal uppercase helvetica, arial, serif;  
}

input[type=submit]{
	position:relative;
	width:150px;
	height:40px;
	border-radius:20px;
	margin-left: 150px;
	border:0px;
	background-color:#C6C6C6;
	font: 14px normal normal uppercase helvetica, arial, serif;
}

p{
	font-size:24px;
        color: white;
}

h1{
    color: white;
}