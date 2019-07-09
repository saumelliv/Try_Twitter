<!DOCTYPE html>
<html>
<head>
	<title>Twitter</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<div class="container">
		<div>
			<a href="index.php" id="tw" ><img src="twitter_512.png" alt=""></a>
			<h1>Twitter</h1>
		</div>

		<div id="formu">
			<form action="muro.php" method="post" accept-charset="utf-8">
				<h5>¿Que estas pensando hoy?</h5><br>
				
				<textarea  rows="50" cols="50" name="escrito" id="msj" required="Obligatorio"></textarea>
				<input type="submit" name="operar" id="public" value="Piblicar" >
				
			</form>
			<br>

		<a href="mensaje.php"><button type="submit" src="mensaje.php" name="operar" id="ir">Ir al muro</button></a>	

		</div>
			
	</div>
</body>
</html>