<!--estou importando a semantica do html5-->
<!DOCTYPE html>
<html>
<head>
	<?php
	/*esta função => wp_head(); trás informações SEO do wordpress*/
	/*lembrando que esta função => wp_head(); é especifica do wordpress*/
       wp_head();
	 ?>

	 <?php
        $title = get_the_title();
        if($title == ''){
        	$title = 'Home';
        }
	  ?>
	<title><?php echo $title; ?></title>
    <!--para garantir que não vamos ter problemas com acentuação.-->
	<meta charset="utf-8">
	<!--incluindo icone-->
	<link rel="icon"  href="images/batman.ico" type="image/x-icon">
	<!--esta tag meta garante que fique design responsivo sempre de acordo com o despositivo exemplo: tablet, computador, celular e outros-->
     <meta name="viewport"content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
     <!--link para usar o fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <!--esta font (roboto) foi buscada do fonts-google-->
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
	<!--estou importanto o meu css => style.css--> 
	<link href="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!--estou abrindo uma sessão em minha pagina com class=topo para manipulação-->
	<section class="topo">
	<!--esta div class="center" é para limitar o meu contexto-->
	  <div class="center">
		<header>
			<div class="logo"><a href="<?php echo '/wordpress/' ?>"><img src="<?php echo get_theme_root_uri(); ?>/construindo-tema-wp/images/logo.png"/></a></div>
		</header>
		<ul class="menu-desktop">
			<li><a href="/wordpress/">Home</a></li>
			<li><a href="/wordpress/sobre/">Sobre</a></li>
			<li><a href="/wordpress/contato/">Contato</a></li>
		</ul>
		<!--menu celular tablet moblile-->
		<div class="menu-mobile">
		 <i class="fas fa-align-right"></i>
		   <ul>
			 <li><a href="/wordpress/">Home</a></li>
			 <li><a href="/wordpress/sobre/">Sobre</a></li>
			 <li><a href="/wordpress/contato/">Contato</a></li>
		   </ul>
		</div><!--menu-mobile-->