<!DOCTYPE html>
<html>
<head>
    <title>eliminar</title>
    <link rel="stylesheet" type="text/css" href="css/atras.css">
</head>
<body >
    
    <div class="container">


        <div>
            <a href="index.php" id="tw" ><img src="twitter_512.png" alt=""></a>
            <h1>Twitter</h1>
        </div>
        <br>


        <?php 

    $id = $_POST["id"];

    $conexion=mysqli_connect("localhost","root","","proyecto") or
       die("Problemas con la conexión");

    $reg=mysqli_query($conexion, "SELECT id FROM twitter WHERE id = '$id'; ");

    if($re=mysqli_fetch_array($reg))
    {
        mysqli_query($conexion, "DELETE FROM twitter WHERE id ='$id';");

        echo "<h2>EL TWEET SE ELIMINO CORRECTAMENTE!! </h2> <br> <hr> ";

        echo "<a href='mensaje.php'><button type='submit' src='mensaje.php' name='operar' id='ir'>Ir al muro</button></a> <br>";

        echo "<a href='mensaje.php'><button type='submit' src='index.php' name='operar' id='ir'>Nuevo Tweet</button></a> <br>";
    }else{
        echo "NO SE PUDO ELIMINAR EL DATO";
    }

    mysqli_close($conexion);


 ?>
    </div>

</body>
</html>