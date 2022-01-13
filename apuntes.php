+<?php
/*
 * @author Kilian Benavente Ortega
 * Apuntes de consultas preparadas
 */


//Abrimos la conexion a la base de datos

    $mysqli = new mysqli("localhost", "root", "","juegos");

//Realizamos la consulta que vamos a realizar para luego el "Prepare"

    $consulta = "Insert into (nombre, url) value (?,?)";

//Preparamos la consulta

    if(!$sentencia = $mysqli->prepare($consulta)){
        echo "La consulta fallo en su preparacion";
    }

//Ahora realizamo el "bind_param" que es donde metemos el tipo de parametro que va a pasar
// y las variables de datos para realizar la consulta que en este caso es una insercion.

    if(!$sentencia->bind_param("ss", $nombre, $url)){
        echo "Fallo en la vinculacion de parametros";
}
$nombre = 0;
$url = 0;

//Ejecutamos la consulta con el siguiente parametro "execute()"
//Tambien se puede relizar con un bucle para realizar varias veces

    if(!$sentencia->execute()){
        echo "Algo fallo en la ejecucion";
    }

  //Por eso una vez que ejecutamos la consulta las veces que sean necesaria realizamos
//su cierre de la siguiente manera

    $sentencia->close();
