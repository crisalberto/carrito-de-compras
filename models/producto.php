<?php
class Producto{
	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stok;
	private $oferta;
	private $fecha;
	private $imagen;
	
	private $db;
	
	public function __construct(){
		$this->db = database::connect();
	}
	
	function getId(){
		return $this->$id;
	}
	
	function getCategoria_id(){
		return $this->$categoria_id;
	}
	
	function getNombre(){
		return $this->$nombre;
	}
	
	function getDescripcion(){
		return $this->$descripcion;
	}
	
	function getPrecio(){
		return $this->$precio;
	}
	
	function getStock(){
		return $this->$stock;
	}
	
	function getOferta(){
		return $this->$oferta;
	}
	
	function getFecha(){
		return $this->$fecha;
	}
	
	function getImagen(){
		return $this->$imagen;
	}
	
	
	function setId($id){
		$this->id = $id;
	}
	
	function setCategoria_id($categoria_id){
		$this->categoria_id = $categoria_id;
	}
	
	function setNombre($nombre){
		$this->nombre = $this->db->real_escape_string($nombre);
	}
	
	function setDescripcion($decripcion){
		$this->descripcion = $this->db->real_escape_string($decripcion);
	}
	
	function setPrecio($precio){
		$this->precio = $this->db->real_escape_string($precio);
	}
	
	function setStock($stock){
		$this->stock = $this->db->real_escape_string($stock);
	}
	
	function setOferta($oferta){
		$this->oferta = $this->db->real_escape_string($oferta);
	}
	
	function setFecha($fecha){
		$this->fecha = $fecha;
	}
	
	function setImagen($imagen){
		$this->imagen = $imagen;
	}
	
	public function getAll(){
		$productos = $this->db->query("SELECT *FROM productos order BY id DESC");
		return $productos;
	}
	
	public function save(){
		$sql = "INSERT INTO productos VALUES (NULL,{$this->getCategoria_id()} ,'{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStok()},null,CURDATE(),NULL);";
		$save = $this->db->query($sql);
		
		
		$result = false;
		
		if($save){
			$result = true;
		}
		return $result;
		
	}
	
	public function getOne(){
		$producto = $this->db->query("select * from productos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
							
public function delete(){
			$sql = "DELETE FROM productos WHERE id={$this->id}";
			$delete = $this->db->query($sql);
			
			$result = false;
		
		if($delete){
			$result = true;
		}
		return $result;
		}									 
	
}