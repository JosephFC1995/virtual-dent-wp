<?php /* Template Name: Questionario form*/?>
<?php  acf_form_head(); get_header();?>

<?php include get_template_directory() . '/inc/headers/header.php'?>
<div class="contenedor-cabecera d-flex align-items-center justify-content-center" style="background: linear-gradient(rgba(42, 42, 43, 0.8),rgba(42, 42, 43, 0.8)) , url('http://virtualdent.net/wp-content/uploads/2018/02/IMG_1041.jpg') center center; background-attachment: fixed;background-size: cover;">
		<span><?php echo wp_title(''); ?></span>
</div>
<div class="container">
	<div class="pagina_contenido">
		<?php if ($_GET['guardado']): ?>
			<div class="alert_g">
				<span>
					Se ha guardado correctamente el cuestionario
				</span>
			</div>
		<?php endif ?>
		<?php
acf_form(array(
    'id'                   => 'formulario_questionable',
    'post_id'              => 'new_post',
    'post_title'           => false,
    'post_content'         => false,
    'return'               => '?guardado=true',
    'new_post'             => array(
        'post_type'   => 'cuestionario',
        'post_status' => 'publish',
    ),
    'submit_value'         => __("Guardar cuestionario", 'acf'),
    'updated_message'      => __("Genial, se guardo el cuestionario", 'acf'),
    'html_updated_message' => '<div id="message_reclamo" class="updated"><p>%s</p></div>',
));

?>
	</div>

</div>

<?php get_footer();?>

