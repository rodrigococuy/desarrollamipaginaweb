<!DOCTYPE html>
<html>




<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $clave;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->username;
		}

		public function setNombre($nombre){
			$this->username = $nombre;
		}

		public function getClave(){
			return $this->password;
		}

		public function setClave($clave){
			$this->password = $clave;
		}
	}
?>