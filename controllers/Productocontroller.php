<?php
 class productocontroller{
	 public function index(){
		
		 require_once'vews/producto/destacados.php';
	 }
	 
	 public function crear(){
		 require_once'vews/producto/crear.php';
	 }
	 
	 public function save(){
		 if(isset($_POST)){
			 $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : false;
			 $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
			 $precio= isset($_POST['precio']) ? $_POST['precio'] : false;
			 $stock= isset($_POST['stock']) ? $_POST['stock'] : false;
			 $categoria= isset($_POST['categoria']) ? $_POST['categoria'] : false;
			 //$imagen= isset($_POST['imagen']) ? $_POST['imagen'] : false;
			 
			 if($nombre && $descripcion && $precio && $stock && $categoria){
				 $producto = new producto();
				 $producto->setNombre($nombre);
				 $producto->setDescripcion($descripcion);
				 $producto->setPrecio($precio);
				 $producto->setStock($stock);
				 $producto->setCategoria_id($categoria);
				 
				 
				$save = $producto->save();
				 if($save){
					 $_SESSION['producto'] = "complete";
				 }else{
					 $_SESSION['producto'] = "failed";
				 }
			 }else{
				 $_SESSION['producto'] = "failed";
			 }
		 }else{
			 $_SESSION['producto'] = "failed";
		 }
		 header('location:'.base_url.'producto/gestion');
	 }

 }

?>