<!DOCTYPE html>
<html>
<head>
	<title>Twitter/Editar</title>
	<link rel="stylesheet" type="text/css" href="css/editar.css">
</head>
<body>
	<div class="container">
		
		<div id="titulo">
			<a href="index.php" id="tw" ><img src="twitter_512.png" alt=""></a>
			<h2>Editar Tweet</h2>
			<a href="mensaje.php"><button>Ir al Muro</button></a>
		</div>

		<form action="actualizar.php" method="post">

			<h3>N° de Tweet:</h3> 
			<input type="" name="id" required="Obligatrio" style="padding: 3px;" value ="
		<?php 
			echo $_GET['id_tweet'];
		 ?>" readonly id="id">
		<br>
	

			<h3>Menaje:</h3> 
		<input type="" name="escrito" required="Obligatrio" style="padding: 3px;" value ="
		<?php 
			echo $_GET['tweet'];
		 ?>" id="texto">
		<br>
		

		<input type="submit" name="actualizar" value="Actualizar" id="actu">

		</form>

		

	</div>


</body>
</html>