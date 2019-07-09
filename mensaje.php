<!DOCTYPE html>
<html>
<head>
	<title>Twitter/Muro</title>
	<link rel="stylesheet" type="text/css" href="css/muro.css">
</head>
<body>
	<div class="container">
		<div id="titulo">
			<a href="index.php" id="tw" ><img src="twitter_512.png" alt=""></a>
			<h1>Twitter</h1>
		</div>

		<table border="1" >
            <tr>
            	<th>Registro</th>
                <th>Tweet's</th>
                <th>Editar Tweet</th>
                <th>Borrar Tweet</th>
            </tr>


            <?php

            //Conecto co  la base de datos
                $conexion=mysqli_connect("localhost","root","","proyecto") or
                die("Problemas con la conexión");

                //Obtengo los registros
                $registros = mysqli_query($conexion,"SELECT id, mensaje FROM twitter");

                while ($reg=mysqli_fetch_array($registros)){
                    echo "<tr>";
                        echo "<td>".$reg["id"]."<a></td>";
                        echo "<td>".$reg["mensaje"]."<a></td>";

                        echo "<td><a href='editar.php?id_tweet=".$reg['id']."&tweet=".$reg['mensaje']."'><button type='button'>Editar</button></a></td>";

                        echo "<td><a href='eliminar.php?id_tweet=".$reg['id']."&tweet=".$reg['mensaje']."'><button type='button'>Eliminar</button></a></td>";

                    echo "</tr>";
                }

                mysqli_close($conexion);

            ?>


        </table>

        <br>

        <a href="index.php"><button id="nt">Nuevo Tweet</button></a>
        <br>
        <hr>

			<footer style="padding:0;margin: 0; background: lightgrey; width: 100%; height: 20px;"> </footer>
	</div>

</body>
</html>