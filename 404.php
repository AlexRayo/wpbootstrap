
<?php get_header(); ?>

	<div class="container-fluid">
		<div class="col-12 col-md-10 col-lg-5 text-center" style="margin: 100px auto;">
		<p class="display-4">Error 404! </p>
			<hr>
		<p class="text-lg">Página no encontrada</p>
		<a class="btn btn-primary" href="<?php echo esc_url( home_url( '') ); ?>">Ir a la página de Inicio</a>
		<div class="img img-404" style="height: 425px;"></div>
				
		</div>		
				
	</div>	

<?php get_footer(); ?>