  <h1>Registrarse</h1>
  <?php if(isset($_SESSION['register']) && $_SESSION['register']):?>
   <strong>Registro completado correctamente</strong>
   <?php else: ?>
    <strong>Registro fallido</strong>
    <?php endif ;?>

  <form action="index.php?controller=usuario&action=save" method="POST">
     <label for="nombre">Nombre</label>
     <input type="text" name="Nombre" required/>
		 
	 <label for="apellido">Apellido</label>
     <input type="text" name="Apellido" required/>
			 
	 <label for="email">Email</label>
     <input type="text" name="Email" required/>
				 
	 <label for="password">Contraseña</label>
     <input type="password" name="Password" required/>
		 
	<input type="submit" value="registrarse">
	  
  </form>