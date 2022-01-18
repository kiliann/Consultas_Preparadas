<?php
require_once "Conexion.php";

include "configuracionBD.php";
    class insercionMasiva extends Conexion {

        public function __construct()
        {

            $this->mysqli = new mysqli(SERVIDOR,USUARIO, PASSWORD, DB);

            //$this->mysqli = $this->inicio();
        }



        function insertar(){
            $juegos = array(
                array('juego' => "juego1", 'direccion'=>"url3"),
                array('juego' => "juego2", 'direccion'=>"url2"),
                array('juego' => "juego3", 'direccion'=>"url1")
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
            $va = array('juego' => '', 'direccion'=>'');
            if(!$sentencia->bind_param("ss", $va['juego'], $va['direccion'])) {
                echo "Fallo en la vinculacion de parametros";
            }
            foreach ($juegos as $valor) {
                //echo $valor['juego']." ";
                //echo $valor['direccion']." ";
                foreach($valor as $k=>$v) {
                    $va[$k] = $v;
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


