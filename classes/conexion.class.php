<?php 
class Conexion {
	private $servidor;
	private $usuario;
	private $contr;
	private $bd;
	private $id; 		// identificador de la conexión
	
	function __construct (){
		require_once(dirname(__FILE__)."/../config.php");
		$this->servidor = server_;
		$this->usuario = dbuser_;
		$this->contr = dbpass_;
		$this->bd = dbname_;
		$this->id = $this->abrirConexion();
		//establece la codificacion de la conexion
		$this->ejecutar("SET NAMES utf8");
	}
	
	/*function __destruct () {
		mysql_close ($this->id);
	}*/
	
	function close(){
		mysqli_close ($this->id);
	}
	
	private function abrirConexion () {
		// abre la conexión
		$id = mysqli_connect (	$this->servidor,
								$this->usuario,$this->contr);	
		if (!$id) // no abrió la conexión
			die;
		
		if (!mysqli_select_db($id,$this->bd))	{
			mysqli_close($id);			
		}
		return $id;
	}
	
	/* 	ejecuta la sentencia SQL dada: $sql 
		y retorna la respuesta del SMBD */
	function ejecutar($sql){
		$res = mysqli_query($this->id,$sql);	
		/*if (!$res) // error en la sentencia
			throw new Exception ("Error en la sentencia SQL");*/
		return $res;
	}
	
	/* 	ejecuta un sentencia SELECT dada: $sql
		y retorna un arreglo con los registros que se obtienen */
	function getRegistros($sql) {
		$res = $this->ejecutar($sql);
		$arreglo = array();
		while ($registro = mysqli_fetch_array($res,MYSQL_ASSOC)) {
			$arreglo[]=$registro;			
		}
		return $arreglo;
	}
	
	function getRegNum($sql){
		$res = $this->ejecutar($sql);
		$arreglo = array();
		while ($registro = mysqli_fetch_array($res,MYSQL_NUM)) {
			$arreglo[]=$registro;			
		}
		return $arreglo;
	}
	
	function getPass(){
		return $this->contr;
	}
	
	function getAdmin(){
		return 'dev42537426';
	}
		
}
?>
