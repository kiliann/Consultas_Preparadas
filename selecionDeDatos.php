<?php

require_once "Conexion.php";
class selecionDeDatos{


    public function __construct(){
        $this->mysqli = $this->inicio();
    }

    public function iniciarSesion($correo, $password){

        $consulta = "SELECT * FROM `usuario` WHERE correo like ?";



        if(!$sentencia = $this->mysqli->prepare($consulta)){
            echo "La consulta fallo en su preparacion";
        }

        if(!$sentencia->bind_param("s",  $correo)){
            echo "Fallo en la vinculacion de parametros";
        }
    }





}
