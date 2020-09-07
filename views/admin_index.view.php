<?php require 'admin_header.php' ?>
	  
	  <section class="admin-s negocios">
	  	<div class="container">
			<h2>Negocios</h2>
		  <div class="row">
			  <div class="col-lg-12">
				  <div class="card">
					  <div class="card-body">
						<h5 class="card-title">Negocios</h5>
						<h6 class="card-subtitle mb-2 text-muted">25 Negocios Agregados</h6>

						<a href="#" class="card-link">Ver Negocios</a>
						<a href="#" class="card-link">Agregar un Negocio</a>
					  </div>
					</div>

				  <div class="card">
					  <div class="card-body">
						<h5 class="card-title">Categorias</h5>
						<h6 class="card-subtitle mb-2 text-muted">24 Categorias Agregadas</h6>

						<a href="categorias.php" class="card-link">Ver Categorias</a>
						<a href="categorias_add.php" class="card-link">Agregar Una Categoria</a>
					  </div>
					</div>
			  </div>

		  </div>
		</div>
	  </section>
	  
	  <section class="admin-s eventos">
		  <div class="container">
			  <h2>Eventos</h2>
		  	<div class="row">
			  <div class="col-lg-12">
			   <div class="card">
				  <div class="card-body">
					<h5 class="card-title">Eventos</h5>
					<h6 class="card-subtitle mb-2 text-muted">10 Eventos Agregados</h6>

					<a href="#" class="card-link">Ver Eventos</a>
					<a href="#" class="card-link">Agregar un Evento</a>
				  </div>
				</div>
			  </div>
		    </div>
		  </div>
	          
	  </section>
	  
	  <section class="admin-s reportes">
		  <div class="container">
			  <h2>Reportes</h2>
		  	<div class="row">
			  <div class="col-lg-12">
			   <div class="card">
				  <div class="card-body">
					<h5 class="card-title">Total de Reportes</h5>
					<h6 class="card-subtitle mb-2 text-muted">255 Reportes Agregados</h6>
					<a href="#" class="card-link">Agregar Reporte</a>
				  </div>
				</div>
			  </div>
				
				<div class="col-lg-4">
					<!-- lamparas -->
					<ul class="list-group">
					  <li class="list-group-item active">Lamparas</li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Reportada
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Reparadas
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Sin Reparar
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					</ul>
					
				</div>
				<div class="col-lg-4">
					<!-- lamparas -->
					<ul class="list-group">
					  <li class="list-group-item active">Baches</li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Reportada
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Reparadas
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Sin Reparar
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					</ul>
					
			    </div>
				
				
				
				
				<div class="col-lg-4">
					<!-- caminos -->
					<ul class="list-group">
					  <li class="list-group-item active">Caminos</li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Reportada
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Reparadas
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						  Sin Reparar
						  <span class="badge badge-primary badge-pill">14</span>
					  </li>
					</ul>
					
			    </div>
				
				
				
				
		    </div>
		  </div>
	          
	  </section>
	  
	          
	  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	  
    <script src="<?php echo RUTA; ?>js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?php echo RUTA; ?>js/popper.min.js"></script>
    <script src="<?php echo RUTA; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo RUTA; ?>owl/owl.carousel.js"></script>
	<script src="<?php echo RUTA; ?>js/app.js"></script>
	<script>
	  
	  $('.loop').owlCarousel({
    center: true,
    items:2,
		  dots:false,
		  nav: true,
    loop:true,
    autoWidth:true,
    margin:30,
    responsive:{
        600:{
            items:4
        }
    }
});
$('.nonloop').owlCarousel({
    center: true,
    items:2,
	dots:false,
		  nav: true,
	 autoWidth:true,
    loop:false,
    margin:25,
    responsive:{
        600:{
            items:4
        }
    }
});
	  
	  </script>

	  
  </body>
</html>