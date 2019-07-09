<!DOCTYPE html>
<html>
<head>
	<title>Twitter/eliminar</title>
	<link rel="stylesheet" type="text/css" href="css/eliminar.css">
</head>
<body>
	<div class="container">
		<div>
			<a href="index.php" ><img src="twitter_512.png" alt=""></a>
			<h1>Twitter</h1>
		</div>

		<form action="delete.php" method="post">

			Registro: <br>
			<input type="" name="id" required="Obligatrio" style="padding: 3px;" value ="
		<?php 
			echo $_GET['id_tweet'];
		 ?>" readonly>
		<br>
	

			Menaje: <br>
		<input type="" name="escrito" required="Obligatrio" style="padding: 3px;" value ="
		<?php 
			echo $_GET['tweet'];
		 ?>" id="texto" readonly id="texto">
		<br>

		<h2>DESEA ELIMINAR EL TWEET ?? </h2>

		<input type="submit" name="eliminar" value="si" id="eli">

		</form>
		<br>

		<a href="mensaje.php"><button>NO</button></a>

	</div>
</body>
</html>