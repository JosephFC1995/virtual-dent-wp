<?php get_header(); ?>

<?php  include get_template_directory().'/inc/headers/header.php' ?>
<?php $meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true ); ?>
<div class="contenedor-cabecera d-flex align-items-center justify-content-center" style="background: linear-gradient(rgba(42, 42, 43, 0.8),rgba(42, 42, 43, 0.8)) , url(<?php echo  $meta_data['pagina_cabecera']; ?>) center center; background-attachment: fixed;background-size: cover;">
		<span><?php echo  wp_title('') ; ?></span>
</div>
<div class="container">
	<div class="pagina_contenido">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	     <?php the_content(); ?>

		<?php endwhile; endif; ?>
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

