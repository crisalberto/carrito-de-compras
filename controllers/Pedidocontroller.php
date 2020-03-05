<?php
 class pedidocontroller{
	 public function index(){
		 echo"Controlador de Pedidos, Accion index";
	 }
	 
	 public function registro(){
		 require_once'../controlers/views/usuario/registro.php';
	 }
 }

?>