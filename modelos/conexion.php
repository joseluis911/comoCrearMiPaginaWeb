<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=db760783520.hosting-data.io;dbname=db760783520",
						"dbo760783520",
						"S@ntiago123",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}
