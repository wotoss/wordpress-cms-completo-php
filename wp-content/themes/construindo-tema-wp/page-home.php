<?php
   //Template Name: Home
 ?>


  <?php get_header(); ?>

		<div class="clear"></div>
		<br />
		<br />
		<!--estou usando uma classe para divisão class="w50" -->
		<!--veja a otimização com a classe time-descricao foi configurado no css=> h2, p, a -->
        <div class="w50 time-descricao">
        	<h2>Melhore a comunicação com seu cliente e time</h2>
        	<p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
        	<a target="_blank" href="https://dankicode.com">Ver demonstração</a>
        </div><!--w50-->
        
        <div class="w50 time-imagem">
        	<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/equipe.png" />
        </div><!--w50-->
        <!--como estamos usando float no css w50 temos que limpar a flutuação-->
        <div class="clear"></div> 

	  </div><!--cente-limitar o contexto-->			
	</section><!--topo-->

    <!--icone tela principal => cirulo e v -->
    <div class="circle"><i class="fas fa-angle-down"></i></div>
   

    <section style="padding: 40px 0;">
    	<div class="center">
    		
    	</div>
    </section>


	<section class="clientes-slider">		
		<div class="center">
	    <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">		
            <img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/amazon.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/costco.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/dominos.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/uber.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/walmart.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/amazon.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/costco.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/dominos.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/uber.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/walmart.jpg" />

         </div>
		</div><!--center-->	
	</section>

	<section class="diferenciais">

		<div class="center">
			<h2>Contribuímos de ponta a ponta</h2>

			<div class="icons-diferenciais">

				<div class="box-single-diferenciais">
					<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/icon1.png">
					<h3>Ambientes Mobile</h3>
					<p>Garanta que toda sua comunicação esteja alinhada com seu propôsito, cada palavra conta.</p>
				</div><!--box-single-diferenciais-->

				<div class="box-single-diferenciais">
					<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/icon2.png">
					<h3>Ambientes Mobile</h3>
					<p>Garanta que toda sua comunicação esteja alinhada com seu propôsito, cada palavra conta.</p>
				</div><!--box-single-diferenciais-->

				<div class="box-single-diferenciais">
					<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/icon3.png">
					<h3>Ambientes Mobile</h3>
					<p>Garanta que toda sua comunicação esteja alinhada com seu propôsito, cada palavra conta.</p>
				</div><!--box-single-diferenciais-->
				
			</div><!--icons-diferenciais-->
		</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<!--w50 representa a divisão da tela => configurada no css-->
			<div class="w50 time-descricao-2">
				<h2>Um time experiente, <br/>comunicador e coeso</h2>

				<p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
				<br /><br/>
				Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajuda.</p>				
			</div><!--w50-->
            <!--w50 representa a divisão da tela => configurada no css-->
            <div class="w50 img-time">
            	<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/time.png" />
            </div>
            <!--como estamos usando float não podemos esquecer da class=clear que esta configurada no css-->
            <!--tenho que sempre limpar a flutuação-->
            <div class="clear"></div>
		</div>
	</section>

	<!--inicio => vamos para a sessão de depoimentos-->
	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimentos-single">
				  <p>" Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."
				  </p>
				  <p>Woto Santana</p>
				  <img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/autor.jpg" />
				</div><!--depoimentos-single-->

				<div class="depoimentos-single">
				  <p>" Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."
				  </p>
				  <p>Woto Santana</p>
				  <img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/autor.jpg" />
				</div><!--depoimentos-single-->

				<div class="depoimentos-single">
				  <p>" Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."
				  </p>
				  <p>Woto Santana</p>
				  <img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/autor.jpg" />
				</div><!--depoimentos-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>
	<!--fim => depoimentos-->

	<?php get_footer(); ?>