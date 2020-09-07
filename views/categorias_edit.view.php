<?php require 'admin_header.php' ?>


<section class="categorias-add">
<div class="container">
	<h2>Editar Categoria</h2>
	<div class="row">
		<div class="card">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<div class="form-group">
				<input type="hidden" value="<?php echo $cat['id']; ?>" name="id">
				<label for=""><strong>Editar </strong>Categoria</label>
				<input type="text" name="nombre" class="form-control" value="<?php echo $cat['nombre']; ?>" required>
				<button type="submit" class="btn btn-primary float-right">Modificar Categoria</button>
			</div>
			</div>
			
		</form>
	</div>
</div>	

	<div class="link">
	<a href="categorias.php">Regresar a Categorias</a>
	</div>
	
</section>



<?php require 'admin_footer.php' ?>