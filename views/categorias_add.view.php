<?php require 'admin_header.php' ?>

<section class="categorias-add">
<div class="container">
	<h2>Añadir Categoria</h2>
	<div class="row">
		<div class="card">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<div class="form-group">
					<label for="">Nombre de la Categoria</label>
					<input type="text" name="nombre" placeholder="nombre" class="form-control" required>
					<button type="submit" class="btn btn-primary float-right">Crear categoria</button>
				</div>
			</form>
		</div>
	</div>
</div>
	<div class="link">
	<a href="categorias.php">Regresar a Categorias</a>
	</div>
</section>




<?php require 'admin_footer.php' ?>