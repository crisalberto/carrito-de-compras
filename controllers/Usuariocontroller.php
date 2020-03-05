<?php


 class usuarioController{
	 public function index(){
		 echo"Controlador Usuario, Accion index";
	 }
	 
	 public function registro(){
		 require_once'vews/usuario/registro.php';
	 }
	 
	 public function save(){
		 if(isset($_POST)){
		
			 
			 var_dump($_POST);
		 }
	 }
 }

?>