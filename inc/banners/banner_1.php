<section id="banner_usuario" class="banner_usuario_banner">
	<div class="">
		<div class="contenedor align-items-center text-center" style="background: url(<?php echo  get_template_directory_uri(). '/assets/images/patters/'. cs_get_option('banner_patter') .'.png';?>); background-color: <?php echo cs_get_option('banner_background') ?>;background-size: <?php echo cs_get_option('banner_background_size') .'%' ?>; ">
			<div class="container">
				<div class="row align-items-center ">
					<div class="col-xl-7 d-none d-xl-block">
						<span class="banner_texto d-lg-inline-block"><?php echo cs_get_option('banner_contenido'); ?></span>
					<?php if (cs_get_option('activador_boton_banner')): ?>
						</div>
						<div class="col-xl-5">
							<a href="<?php echo cs_get_option('enlace_boton'); ?>"><span class="btn-usuario btn-more"><i class="<?php echo cs_get_option('icono_boton'); ?>"></i><?php echo cs_get_option('texto_boton'); ?></span></a>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>