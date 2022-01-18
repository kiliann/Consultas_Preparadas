<?php

require_once "Conexion.php";



class SelecionDeDatos extends Conexion {
    private $mysqli = null;

    public function __construct(){

        $this->mysqli = $this->inicio();
    }

    public function iniciarSesion($correo, $password){

        $consulta = "SELECT * FROM usuario WHERE correo = ?";



        if(!$sentencia = $this->mysqli->prepare($consulta)){
            echo "La consulta fallo en su preparacion";
        }

        if(!$sentencia->bind_param("s",  $correo)){
            echo "Fallo en la vinculacion de parametros";
        }

        if(!$sentencia->execute()){
            echo "Algo fallo en la ejecucion";

        }

        $resultado = $sentencia->get_result();

        while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
            echo $fila['correo'];
            echo $fila['contrasena'];
            if($fila['contrasena'] == $password){
                session_start();
                $_SESSION['usurio']= $fila['correo'];
            }
        }

    }





}
