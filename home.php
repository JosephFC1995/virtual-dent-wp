<?php get_header( ); ?>

<?php  include get_template_directory().'/inc/headers/header.php' ?>

<div class="contenedor-cabecera d-flex align-items-center justify-content-center" style="background: linear-gradient(rgba(42, 42, 43, 0.8),rgba(42, 42, 43, 0.8)) , url(<?php echo get_template_directory_uri(). '/assets/images/bg4.jpg' ?>) center center; background-attachment: fixed;">
		<span><?php echo  wp_title('') ; ?></span>
</div>
<div class="page_blog">
	<div class="container">
		<div class="">
		<!-- Listado de posts -->
		<?php if ( have_posts() ) : ?>
			<section class="posts row">
				<?php while ( have_posts() ) : the_post(); ?>
				<article class="post col-xl-4 col-lg-6">
					<div class="img_post">
						<a href=" <?php the_permalink();  ?>"><?php the_post_thumbnail('large'); ?></a>
					</div>
					<div class="contend_post">
						<div class="dates_post text-uppercase">
							<span class="category">
								<?php foreach((get_the_category()) as $category) { 
									$categoria =  $category->cat_name . ' ';
									$categoria_link = get_category_link( $category ->cat_ID );?>	
									<a href=" <?php echo $categoria_link ?> "><span> <?php echo $categoria?></span></a> 
								<?php
								} 
								?>	
							</span> 
							<span>-</span>
							<span class="time">
								<time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time( 'F' ); the_time(' d, Y'); ?></time>
							</span>
							
						</div>
						<div class="title_post">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
						<div class="resume_post">
							<p><?php  
									$excerpt = get_the_excerpt();
									$excerpt = substr( $excerpt , 0, 100); 
									echo $excerpt .'.';
									?></p>
						</div>
					</div>
				</article>
				<?php endwhile; ?>
				<div class="pagination col-12 justify-content-center">
					<?php theme_pagination_fn();?>
			    </div>
			</section>
		<?php else : ?>
		  <p class="no_post"><?php _e('Ups!, aun no hay entradas.'); ?></p>
		<?php endif; ?>
		</div>
	</div>
</div>
<?php if ($meta_data['agregar_apartado_mis_visi']) :?>
	<?php include get_template_directory().'/inc/mision_vision/mision_vision.php' ?>
<?php endif ?>

<?php if ($meta_data['agregar_apartado_especialidades']) :?>
	<?php include get_template_directory().'/inc/especialidades/especialidades.php' ?>
<?php endif ?>

<?php if ($meta_data['agregar_apartado_planes']) :?>
	<!--Incluir el apartado de planes-->
	<?php include get_template_directory().'/inc/planes/planes.php' ?>
<?php endif ?>

<?php if ($meta_data['agregar_apartado_calendario']) :?>
	<!--Incluir el apartado de calendario-->
	<?php include get_template_directory().'/inc/calendar/calendario.php' ?>
<?php endif ?>


<?php if ($meta_data['agregar_apartado_mapa']) :?>
	<!--Incluir el apartado de mapa-->
	<?php include get_template_directory().'/inc/map/map_1.php' ?>
<?php endif ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>