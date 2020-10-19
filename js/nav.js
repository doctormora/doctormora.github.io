	$('#mostrar').on('click',function(){
			$('#men').toggleClass('menu-movil-m');
			$('body').toggleClass('ocul');
	 })
	
    $('#cerrar-men').on('click',function(){
		$('#men').removeClass('menu-movil-m');
		$('body').css({overflow: "auto"});
		
	})

    	// se cambio el spinner por una barra de progreso se utilizo el plugin parce.min
		//window.onload = function(){
		//	var contenedor = document.getElementById('carga');
		//	contenedor.style.visibility = 'hidden';
		//}