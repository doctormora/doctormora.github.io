<?php require '../views/admin_header.html' ?>
	
	
	<section>
	<div class="container">
		<h2>Categorias</h2>
			<div class="row">
				<a href="categorias_add.html" class="btn btn-primary"> Agregar Categoria</a>	
				<br>
				
				<table class="table table-striped" style="margin-top: 25px">
				  <thead>
					<tr>
					  <th scope="col">Id</th>
					  <th scope="col">Nombre</th>
					  <th scope="col">Acciones</th>
					 
					</tr>
				  </thead>
				  <tbody>
					  <?php foreach($categorias as $cat): ?>
					<tr>
					  <th><?php echo $cat['id']; ?></th>
					  <td><?php echo $cat['nombre']; ?></td>
					  <td><a href="categorias_edit.html?id=<?php echo $cat['id']; ?>" class="btn btn-info">Editar</a>
						<a href="categorias_delete.html?id=<?php echo $cat['id']; ?>" class="btn btn-danger">Eliminar</a>
						</td>
					  
					</tr>
					  <?php endforeach; ?>
				  </tbody>
				</table>
				
				
				
				
			</div>
		</div>
	</section>
	
	

<?php require '../views/admin_footer.html' ?>