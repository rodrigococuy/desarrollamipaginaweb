<!DOCTYPE html>
<html>




<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	
	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO USERS VALUES(NULL,:username,:password)');
			$insert->bindValue('username',$usuario->getNombre());
			//encripta la clave
			$pass=password_hash($usuario->getClave(),PASSWORD_DEFAULT);
			$insert->bindValue('password',$pass);
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($nombre, $clave){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE username=:username');//AND clave=:clave
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
			//verifica si la clave es conrrecta
			if (password_verify($clave, $registro['clave'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['id']);
				$usuario->setNombre($registro['username']);
				$usuario->setClave($registro['password']);
			}			
			return $usuario;
		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USERS WHERE username=:username');
			$select->bindValue('username',$nombre);
			$select->execute();
			$registro=$select->fetch();
			if($registro['id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>