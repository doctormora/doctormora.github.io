<?php 
	include_once 'funciones/funciones.html';
  	include_once 'templates/header.html'; 
  	include_once 'templates/barra.html';
  	include_once 'templates/navegacion.html'; 

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Administrador</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Administrador</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
  		<div class="row">
			<div class="col-md-6 card">
				 <form role="form" name="crear_admin" id="crear_admin" method="post" action="insertar_admin.html">
					  <div class="card-body">
						<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escribe un nombre de usuario">
					  </div>
					  <div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe el nombre completo">
					  </div>
					  <div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Escribe una contraseña">
					  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
					<input type="hidden" name="agregar_admin" value="1">
                  <button type="submit" class="btn btn-primary btn-block">Añadir</button>
                </div>
              </form>
			
			</div>
		</div>		
		    
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include_once 'templates/footer.html'; ?>