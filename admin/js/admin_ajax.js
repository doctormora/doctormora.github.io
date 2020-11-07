$(document).ready(function(){
	$('#crear_admin').on('submit', function(e){
		e.preventDefault();
		
		var datos = $(this).serializeArray();
		console.log(datos);
	});
	
});