
	


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