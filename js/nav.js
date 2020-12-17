	$('#mostrar').on('click',function(){
			$('#men').toggleClass('menu-movil-m');
			$('body').addClass('ocul');
			$('.sombra').css({display : "block"});
	 })
	
    $('#cerrar-men').on('click',function(){
		$('#men').removeClass('menu-movil-m');
		$('body').removeClass('ocul');
		$('.sombra').css({display : "none"});
		
	})


 	$('.sombra').on('click',function(){
		$('#men').removeClass('menu-movil-m');
		$('body').removeClass('ocul');
		$('.sombra').css({display : "none"});
		
	})

	

    	// se cambio el spinner por una barra de progreso se utilizo el plugin parce.min
		//window.onload = function(){
		//	var contenedor = document.getElementById('carga');
		//	contenedor.style.visibility = 'hidden';
		//}



	$(window).scroll(function() {        
		var scroll = $(window).scrollTop(); 		
		if (scroll < 100) {
		   $(".menu-escritorio").removeClass("menu-e-top");
			
		}else{
		   $(".menu-escritorio").addClass("menu-e-top");
			 
		}
	});




	

	


  
$(function(){
	
	
	var tope = $('.banner-content').innerHeight();
	
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		
		if(scroll + 57 > tope / 2){
			$(".emerge").addClass("emerge-mov");
		}else{
			$(".emerge").removeClass("emerge-mov");
		}
	});
	
	
});


