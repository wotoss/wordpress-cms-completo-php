   
   <?php
       $title = get_the_title();
   ?>
	<!--inicio => rodapé footer-->
     <footer <?php if($title == 'Contato') {echo 'style="padding:20px 0;"';} ?>>

     <?php
        if($title != 'Contato' && is_404() == false){
      ?>

     <!--inicio => tela com efeito => cobrepondo o azul-->
	   <section class="metodologia">
		 <div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que você acha de fazermos o que mais gostamosde fazer? Conversar! <br />
			Entre em contato por e-mail ou telefone.</p>
			<a href="/contato">Entrar Contato</a>
		 </div>
	  </section>
       <?php
          }
       ?>
     	<div class="center">

     	  <div class="col-footer">
     	  	<h2>Suporte</h2>
     	  	<a href="">Contato</a>
     	  	<a href="">FAQ</a>
     	  </div>	

     	  <div class="col-footer">
     	  	<h2>Consultoria</h2>
     	  	<a href="">Contato</a>
     	  	<a href="">FAQ</a>
     	  </div>	

     	  <div class="col-footer">
     	  	<h2>Empresa</h2>
     	  	<a href="">Contato</a>
     	  	<a href="">FAQ</a>
     	  </div>	

     	   <div style="width: 40%; text-align: right;" class="col-footer">
     	  	 <img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/logo-footer.png" />
     	  </div>	

     	</div>
     </footer>
	<!--fim => rodapé footer-->

	<!--esta função especifica do wordpress wp_footer(); => trás javScript padrões do wordpress-->
	<?php wp_footer(); ?>
   
    <!--no html5 isto (type="text/javascript") já foi retirado não precisa acrescentar -->
	<script src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/js/jquery.js"></script>
	<script src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/js/slick.min.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/js/map.js"></script>
	<!--inicio - javaScript-->
     <script type="text/javascript">
       $('section.clientes-slider .slider-container').slick({
	        dots: true,
	        arrows: false,
	        infinite: false,
	        speed: 1000,
	        slidesToShow: 4,
	        autoplay: true,
	        centerMode:false,
	        autoplaySpeed: 3000,
	        pauseOnHover: false,
	        responsive:
	        [
	        {
	        	breakpoint: 768,
	        	settings: {
	        		slidesToShow: 2
	        	}
	        }
	        ]
       }); 	

        $('section.depoimentos .depoimentos-box').slick({
	        dots: true,
	        arrows: false,
	        infinite: true,
	        speed: 1000,
	        slidesToShow: 1, /*colocamos (1) pois é (um) depoimento por mês.*/
	        autoplay: true,
	        centerMode:false
	        [
	        {
	        	breakpoint: 768,
	        	settings: {
	        		slidesToShow: 2
	        	}
	        }
	        ]
       }); 	
     </script>
	<!--fim js-->

    <!--
    	menu responsivo em jquery lembrando que no css 
    	.menu-mobile ul{ display: none; } que faz (ocultar sumir) o menu
    	e aqui após o click no icone  $('.menu-mobile i')montamos a logica.
    -->
	<script type="text/javascript">
        $('.menu-mobile i').click(function(){
        	$('.menu-mobile').find('ul').slideToggle();
        })
	</script>
</body>
</html>