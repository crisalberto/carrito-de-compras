<?php
require_once'models/producto.php';
 class carritocontroller{
	 public function index(){
		var_dump($_SESSION['carrito']);
		 echo"Controlador de carrito, Accion index";
	 }
	 
	 public function add(){
		 if(isset($_GET['id'])){
			 $producto_id = $_GET['id'];
		 }else{
			 header('Location:' .index.php);
		 }
		 if(isset($_SESSION['carrito'])){
			 
		 }else{
			 $producto = new Producto();
			 $producto->setId($producto_id);
			 $producto = $producto->getOne();
			 
			 
			 if(is_object($producto)){
			   $_SESSION['carrito'][] = array(
			    "id_producto" => $producto->id,
			    "precio" => $producto->precio,   
			   "unidades" => 1,
				"producto" =>$producto
				   
			   );
			 }
		 }
		 header("location: index.php?controller=carrito&action=index");
		 
	 }
	 
	  public function remove(){
		 
	 }
	 
	  public function delete(){
		 
	 }
 }

?>