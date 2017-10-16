<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo wp_title(); ?></title>

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/main.css">

    <?php wp_head(); ?>
</head>
<body>

	<header class="header">
		<div class="grid">
			<div class="col">
				<?php if ( is_home() ) : ?>
					<h1><a href="<?php echo get_bloginfo('url') ?>" class="header-logo">Junior <span>Roux</span></a></h1>
				<?php else : ?>
					<span><a href="<?php echo get_bloginfo('url') ?>" class="header-logo">Junior <span>Roux</span></a></span>
				<?php endif; ?>

				<nav class="menu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Projetos</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</nav>
			</div>
			<div class="col">
				<div class="header-social">
					<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</header>

	<div class="grid">
		<form action="#" class="search box" method="post">
			<input class="search-input" type="search" name="q" placeholder="Digite sua pesquisa..." required>
			<button class="search-button" type="submit">Pesquisar</button>
		</form>
	</div>