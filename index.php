<?php  
// Template Name: Home
get_header();
?>

<section class="categorias">
	<div class="grid">
		<div class="box">
			<strong class="categorias-title">Categorias:</strong>
			<nav class="categorias-menu">
				<ul>
					<li><a href="#">PHP</a></li>
					<li><a href="#">MySQL</a></li>
					<li><a href="#">HTML</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">jQuery</a></li>
					<li><a href="#">Javascript</a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>

<section class="artigos">
	<div class="grid">
		<?php for ( $i = 0; $i < 3; $i++ ) : ?>
		<article class="artigos-item box">
			<img src="<?php echo get_bloginfo('template_url') ?>/img/sample.jpg" alt="Imagem de Exemplo">
			<h2><a href="#">Ferramentas essenciais para programadores</a></h2>
			<p>Conheça as principais ferramentas para os programadores, que irão agilizar
			seu processo de desenvolvimento, tornando seu dia muito mais produtivo...</p>
			<span class="artigos-button">Continue Lendo</span>
		</article>
		<?php endfor; ?>
	</div>
</section>

<?php 
get_footer(); 
?>