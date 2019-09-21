<?php get_header(); ?>
	<?php //MUESTRA THUMBNAIL DE 300px alto
	if(has_post_thumbnail())
	echo '<div class="d-none d-md-block container-fluid thumb-container" style="height: 300px;">';
	{the_post_thumbnail('list_articles_thumb'); } 
	echo '</div>';

	echo '<div class="d-block d-md-none container-fluid thumb-container" style="height: 200px;">' ;
	{the_post_thumbnail('list_articles_thumb'); } 
	echo '</div>';
	?>

	<div class="container">
		<div class="col-12 px-3">
			<?php if(have_posts()):while (have_posts()):the_post(); ?>
			<?php if(has_post_thumbnail()) //Si tiene imagen destacada entonces q muestre el div de abajo con esos estilos
				echo '<div style="margin: 0 auto 100px;">';
			?>
			<?php if(!has_post_thumbnail())//Si no tiene imágen destacada... 
				echo '<div style="margin: 100px auto;">';
			?>
			<p class="display-5 mt-1 mb-1"><?php the_title(); ?></p>	<?php the_content(); ?>
			<?php endwhile;else: ?>
					<h1 class="display-2">NO SE HA ENCONTRADO NADA</h1>
			<?php endif; ?>	
			</div>	
		</div>	
	</div>	

<?php get_footer(); ?>