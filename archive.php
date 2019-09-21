<?php get_header(); ?>	
	
<!--INICIO main-->
<div class="container col-12 col-md-12 col-xl-10" style="margin-bottom: 100px;">
	<h2 class="text-center display-4 mb-4" style="margin-top: 100px;">Servicios</h2>
	<div class="row">
	

	<?php if(have_posts()):while (have_posts()):the_post(); ?>
		<!--block uses 8 columns on mobile vertical, margin auto, 6 cols on mobile horizontal, 4 cols on large screen
			4 of margin botton on mobile vertical an so on, padding zero on x axis on mobile vertical, padding 1 on x axis on mobile horizontal and so on-->
		<div class="col-11 mx-auto col-sm-6 col-lg-4 mb-4 px-0 px-sm-1 block" style="overflow: hidden;">
			<div class="position-absolute pd-4 capa-texto transition bg-dark text-white"><?php the_content(); ?></div>
			<div class="thumb-container" style="height: 200px;"><?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?></div>
			<div>
				<h4 class="text-center title-article-home transition bg-primary-hover text-white pt-1 pb-3"><?php the_title(); ?></h4>
			</div>
						
		</div>
	<?php $i++; endwhile;else: ?>
		<h2 class="text-center display-3">Próximamente...</h2>
	<?php endif; ?>
	</div>
	
</div>
<div class="container-fluid img obras-civiles" style="padding: 50px 0; margin-bottom: 150px;">
		<div class="row d-flex align-items-center">
			<div class="col-12 col-md-8 col-lg-6 text-white ml-2 text-center mx-auto" style="padding: 50px 0;">
				<h2 class="display-4">Especialistas en obras civiles</h1>
				<p class="col-11">
				Contamos con capacidad y experiencia para desarrollar diversas obras civiles, que proponen diferentes programas, complejidades y escalas, con eficiencia y precisión.
				</p>
				<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="btn btn-lg btn-primary"><span class="fa fa-send mr-2"></span> Enviar un mensaje</a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>