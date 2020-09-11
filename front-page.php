<?php get_header(); ?>


<?php include get_template_directory().'/inc/headers/header_slider.php' ?>
<!--Incluir el apartado de virtudes-->
<?php if (cs_get_option('activador_virtudes')): ?>
<?php include get_template_directory().'/inc/virtudes/virtudes_1.php' ?>
<?php endif ?>

<!--Incluir el apartado de banner-->
<?php if (cs_get_option('activador_banner')): ?>
<?php include get_template_directory().'/inc/banners/banner_1.php' ?>
<?php endif ?>

<!--Incluir el apartado de especialidades-->
<?php if (cs_get_option('activador_especialidades')): ?>
<?php include get_template_directory().'/inc/especialidades/especialidades.php' ?>
<?php endif ?>

<!--Incluir el apartado de planes-->
<?php if (cs_get_option('activador_planes')): ?>
<?php include get_template_directory().'/inc/planes/planes.php' ?>
<?php endif ?>

<!--Incluir el apartado de calendario-->
<?php include get_template_directory().'/inc/calendar/calendario.php' ?>
<?php get_footer(); ?>