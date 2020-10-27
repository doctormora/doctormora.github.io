	$('#mostrar').on('click',function(){
			$('#men').toggleClass('menu-movil-m');			
	 })
	
    $('#cerrar-men').on('click',function(){
		$('#men').removeClass('menu-movil-m');
	})


		window.onload = function(){
			var contenedor = document.getElementById('carga');
			contenedor.style.visibility = 'hidden';
		}