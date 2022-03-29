<?php
  //Template Name: Contato.
?>

<?php
//através da função =>  get_header(); => trago o cabeçalho.
   get_header();
?>

<!--inicio - estou fechando aqui a (section-topo e a div class center) do header-->
</div>
</section>
<!--fim - estou fechando aqui a section do header-->

  <!--inicio => contato-pagina-->
     <section class="contato">
     	<div class="center">
     		<div class="w50 contato-info">
     			<h2>A mais importante, <br />primeira conversa.</h2>
     			<br />
                <?php
                /*while => laço de repetição*/
                /*(have_rows => busco o campo e em quanto eu tiver valor rodarei o loop*/
                   while(have_rows('nome_tipo_contato')){
                /*the_row => é para validar o worpress é um padrão do wordpress.*/
                   the_row();    

                 ?>
                 <!--trago o nome do meu subfield-->
     			<p><b><?php echo get_sub_field('categoria'); ?>:</b><?php echo get_sub_field('valor'); ?></p>
     			<?php } ?>

     			<!--mapa dentro da sessão contatos-->
     		<div class="mapa-container">
     			<div id="mapa"></div>
                <!--colocarei o mapa pelo arquivo mapa.js-->
     		   </div><!--mapa-->
     	   </div>

     	   <!--iniciando formulario-->
            <div class="w50 contato-form">
            	<form>
            		<input placeholder="Nome" type="text" />
            		<input placeholder="E-mail" type="text" />
            		<input placeholder="Telefone" type="text" />
            		<select>
            			<option>Geral</option>
            			<option>Suporte</option>
            		</select>
            		<textarea placeholder="Mensagem"></textarea>
            		<input type="submit" value="Enviar!">
            	</form>
            </div>
     	  <div class="clear"></div>
     	</div>
     </section>
    <!--fim => contato-pagina-->

   <!--através da função get_footer(); => busco o rodapé/footer -->
    <?php get_footer(); ?>
