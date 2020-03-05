<h1>Gestionar catrgoria</h1>
<a href="index.php?controller=categoria&action=crear" class="button button-small">
	Crear categoria
</a>

<table>
 <tr>
   	<th>ID</th>
   	<th>NOMBRE</th>
   </tr>
  <?php while($cat = $categorias->fetch_object()):?>
   <tr>
   	<td><?= $cat->id; ?></td>
   	<td><?= $cat->nombre; ?></td>
   </tr>
  <?php endwhile; ?>
</table>