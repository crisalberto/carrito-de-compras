<?php
require_once 'models/categoria.php';

 class categoriacontroller{
	 public function index(){
		 $categoria = new Categoria();
		 $categorias = $categoria->getAll();
		 
		 include 'vews/categoria/index.php';
	 }
	 
	 public function crear(){
		 require_once'vews/categoria/crear.php';
	 }
	 
	 public function save(){
		 
	 }
	 
 }

?>