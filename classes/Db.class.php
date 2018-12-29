<?php

/*********************************************** Funciones más comunes de MySQL *********************************************************
 * Estas funciones puedes usarlas sobre $elem para obtener los elementos que te interesan                                               *
 *  MIN:        El menor elemento de la columna. Ej: SELECT MIN(id)                                                                     *
 *  MAX:        El mayor elemento de la columna. Ej: SELECT MAX(id)                                                                     *
 *  COUNT:      El numero de elementos en la columna. Ej: SELECT COUNT(id)                                                              *
 *  RIGHT:      Subcadena con los caracteres de la derecha de un elemento. Ej: RIGHT(casa,2) = sa                                       *
 *  LEFT:       Subcadena con los caracteres de la izquierda de un elemento. Ej: LEFT(casa,2) = ca                                      *
 *  DISTINCT:   Los elementos únicos de una columna. Ej: Sea id = {1,2,3,2,1} => DISTINCT(id) = {1,2,3}                                 *
 ****************************************************************************************************************************************/

require_once("conexion.class.php");

class Db {

    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
    }

    /*
     *   Function getElem
     *   params: $tabla  -   tabla donde se encuentra la información
     *           $elem   -   elemetos de interes
     *           $cond   -   condición para seleccionar la data
     *   
     *   Ej: Seleccionar el título de la publicación 1
     *           getElem('publicacion','titulo','id = 1') devuelve Noticia 1
     *
     *   returns:    - matriz asociativa ([i][j]) con la data donde 'i' es el la cantidad de registros y 'j' es el índice en la tabla. 
     *                   Ej: $array[0]['titulo'] contiene Noticia 1
     *
     *               - false en otros casos
     *
     *   comments:   Se pueden seleccionar todos los campos (*), un campo (campo) o varios campos (campo_1,campo_2,...,campo_n)
     *               Si la condición está definida sobre un campo varchar, el valor debe estar entre comillas. Ej: titulo = 'Noticia 1'
     *               Para colocar varias condiciones se deben separar con la palabra reservada de SQL 'AND'
     *
    */
    function getElem($tabla,$elem,$cond = 1){
        $sql = "SELECT $elem FROM $tabla WHERE $cond";
        $aux = $this->conexion->getRegistros($sql);
        $this->conexion->close();
        return $aux;
    }

    function addElem($tabla, $clave, $valor) {
        $sql = "INSERT INTO $tabla($clave) VALUES($valor)";
        //echo $sql ."<br>";
        $res = $this->conexion->ejecutar($sql);
        $this->conexion->close();
        return $res;
    }

    function deleteElem($tabla,$elem,$cond = 1){
        $sql = "DELETE $elem FROM $tabla WHERE $cond";
        $aux = $this->conexion->getRegistros($sql);
        $this->conexion->close();
        return $aux;
    }
    
    function updateElem($tabla,$fields,$values,$cond = 1){
        $sql = "UPDATE $tabla SET $fields = $values WHERE $cond";
        //echo $sql;    Test & Debug
        $res = $this->conexion->ejecutar($sql);
        $this->conexion->close();
        return $res;
    }

    function validar($login, $password) {
        if ($login == 'admin') {
            $pass = $this->conexion->getAdmin();
        } else {
            $pass = $this->conexion->getPass();
        }
        $sql = "SELECT * FROM users WHERE email = '$login' AND pass = AES_ENCRYPT('$password','$pass')";
        //echo $sql;
        $registros = $this->conexion->getRegistros($sql);
        $this->conexion->close();
        if (count($registros) == 1)
            return $registros[0];
        else
            return false;
    }

    function getPass() {
        return $this->conexion->getPass();
    }

}

?>