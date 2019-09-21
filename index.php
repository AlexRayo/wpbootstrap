<?php get_header(); ?>
<!--  COVER  -->
<div class="container-fluid cover img h-100" style="height: 100vh;">
	<div class="layer" style="opacity: 0.75;"></div>
	<div class="row d-flex align-items-center justify-content-center text-center h-100">
		<div class="col-11 col-xl-8 text-white">
			<h1 class="d-none d-md-block display-4">Construcción y mantenimiento</h1>
			<h1 class="d-block d-md-none text-xl">Construcción y mantenimiento</h1>
			<p class="text-md">Servicios profesionales aplicados a viviendas y obras civiles</p>
			<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="btn btn-lg btn-primary"><span class="fa fa-send mr-2"></span> Enviar un mensaje</a>
		</div>
	</div>
</div>

<!--  SERVICIOS  -->
<div class="container col-12 col-md-12 col-xl-10" style="margin: 100px auto;">
	<h2 class="text-center display-4 mb-4">Servicios</h2>
	<div class="row">
	

	<?php query_posts('category_name=services'); ?>
	<?php $i = 1; if(have_posts()):while (have_posts() && $i < 7) : the_post(); ?>
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

<!--  OBRAS CIVILES  -->
	<div class="container-fluid img obras-civiles position-relative">
		<div class="layer" style="opacity: 0.75;"></div>
		<div class="row">
			<div class="col-11 col-md-8 col-lg-6 text-white ml-2 text-center mx-auto" style="padding: 50px 0;">
				<h2 class="display-4">Especialistas en obras civiles</h1>
				<p class="col-11">
				Contamos con capacidad y experiencia para desarrollar diversas obras civiles, que proponen diferentes programas, complejidades y escalas, con eficiencia y precisión.
				</p>
				<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="btn btn-lg btn-primary"><span class="fa fa-send mr-2"></span> Enviar un mensaje</a>
			</div>
		</div>
	</div>

	<!--  SOLICITA TU PRESUPUESTO  -->
	<div class="container col-11 col-lg-10" style="margin: 100px auto;">
		<div class="row">
			<?php query_posts('category_name=budget'); ?>
			<?php $i = 1; if(have_posts()):while (have_posts() && $i < 2) : the_post(); ?>

			<div class="col-12 col-md-8 mx-auto col-lg-6">
				<h2 class="text-center display-4"><?php the_title(); ?></h2>
				<div><?php the_excerpt(); ?></div>

				<div class="mt-2 text-center">
					<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="btn btn-lg btn-primary"><span class="fa fa-send mr-2"></span> Solicitar</a>	
				</div>
			</div>
			<div class="col-12 col-lg-6 thumb-container d-none d-lg-block" style="height: 300px;"><?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?></div>
			<?php $i++; endwhile;else: ?>
				<h2 class="text-center display-3">Próximamente...</h2>
			<?php endif; ?>
		</div>
	</div>

	<!--  SOBRE NOSOTROS  -->
	<div class="container col-11 col-lg-10" style="margin: 100px auto;">
		<div class="row">
			<?php query_posts('category_name=about'); ?>
			<?php $i = 1; if(have_posts()):while (have_posts() && $i < 2) : the_post(); ?>			
			<div class="col-12 col-lg-6 thumb-container d-none d-lg-block" style="height: 300px;"><?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?></div>
			<div class="col-12 col-md-8 mx-auto col-lg-6">
				<h2 class="text-center display-4"><?php the_title(); ?></h2>
				<div><?php the_excerpt(); ?></div>

				<div class="mt-2 text-center">
					<a href="<?php echo esc_url( home_url( '/sobre-nosotros' ) ); ?>" class="btn btn-lg btn-primary"><span class="fa fa-eye mr-2"></span>Ver más</a>	
				</div>
			</div>
			<?php $i++; endwhile;else: ?>
				<h2 class="text-center display-3">Próximamente...</h2>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

