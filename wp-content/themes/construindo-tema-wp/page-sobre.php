
<?php
   //Template Name: Sobre
?>
  <?php
      get_header();
   ?>

<!--inicio - estou fechando aqui a (section-topo e a div class center) do header-->
</div>
</section>
<!--fim - estou fechando aqui a section do header-->


<section class="sobre-equipe">
	 <div class="center">
		<div class="w50 equipe-sobre-texto">
			<h2>Uma equipe estratégica para um trabalho incrível</h2>
			<p>Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação criativas, consistentes e adequadas às necessidades e características de cada companhia. Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada cliente.</p>
		</div>
		<div class="w50">
			<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/foto-equipe.jpg" />
		</div>
		<div class="clear"></div>
	</div>	
	</section>

	<!--imagens-sobre-->
	<section class="sobre-imagens">
		<div class="center">
		  <div class="img-sobre">
		  	<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/imagem-sobre.jpg" />
		  </div>

		   <div class="img-sobre">
		  	<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/imagem-sobre.jpg" />
		  </div>	

		   <div class="img-sobre">
		  	<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/imagem-sobre.jpg" />
		  </div>	

		   <div class="img-sobre">
		  	<img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/imagem-sobre.jpg" />
		  </div>	

		</div>
	</section>

<!--através da função get_footer(); => busco o rodapé/footer -->
    <?php get_footer(); ?>

