<?php
   
   $server= "localhost";
   $username= "root";
   $password= "";
   $db= "tienda_master";
  
   $con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer conexion");
   $sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

?>