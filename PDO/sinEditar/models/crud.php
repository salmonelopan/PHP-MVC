<?php
require_once "conexion.php";
    /**
     *
     */
    class Datos extends Conexion{

      #REGISTRO DE USUARIOS
      /*******************************************************/
      public function registroUsuarioModel($datosModel, $tabla)
      {
        # code...
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES
           (:usuario,:password,:email)");

            $stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
            $stmt -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

            if ($stmt ->  execute()) {
              # code...
              return "success";
            }
            else {
              return "Error";
            }

      }
    }


 ?>
