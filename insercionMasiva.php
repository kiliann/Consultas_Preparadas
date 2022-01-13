<?php
require_once "Conexion.php";
    class insercionMasiva extends Conexion {

        public function __construct()
        {
            include "configuracionBD.php";
            $this->mysqli = new mysqli(SERVIDOR,USUARIO, PASSWORD, DB);

            //$this->conexion = $this->inicio();
        }



        function insertar(){
            $juegos = array(
                array('juego' => "juego4", 'direccion'=>"url3"),
                array('juego' => "juego5", 'direccion'=>"url2"),
                array('juego' => "juego6", 'direccion'=>"url1")
        );
            $consulta = "Insert into minijuegos(nombre, url) value (?,?)";


            if(!$sentencia = $this->mysqli->prepare($consulta)){
                echo "La consulta fallo en su preparacion";
            }
           /* $valor = "saca muelas";
            $valor1 = "url casa";
            if(!$sentencia->bind_param("ss",$valor, $valor1)) {
                echo "Fallo en la vinculacion de parametros";
            }
            if(!$sentencia->execute()){
                echo "Algo fallo en la ejecucion";
            }else{
                echo "realizo Corectamente";
            }*/

            foreach ($juegos as $valor) {
                //echo $valor['juego']." ";
                //echo $valor['direccion']." ";
                if(!$sentencia->bind_param("ss", $valor['juego'], $valor['direccion'])) {
                    echo "Fallo en la vinculacion de parametros";
                }
                if(!$sentencia->execute()){
                    echo "Algo fallo en la ejecucion";
                }else{
                    echo "La insercion fue correcta ";
                }
            }

            $sentencia->close();

        }
    }

    $insercionMasiva = new insercionMasiva();

    $insercionMasiva->insertar();
?>


