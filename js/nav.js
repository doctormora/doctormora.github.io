	$('#mostrar').on('click',function(){
			$('#men').toggleClass('menu-movil-m');
			$('body').toggleClass('ocul'});
	 })
	
    $('#cerrar-men').on('click',function(){
		$('#men').removeClass('menu-movil-m');
		$('body').css({overflow: "auto"});
		
	})


		window.onload = function(){
			var contenedor = document.getElementById('carga');
			contenedor.style.visibility = 'hidden';
		}