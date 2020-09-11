<section id="especialidades" class="especialidades" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8))  ,url( <?php echo "'" . cs_get_option('especialidades_background') ."'"?> );">
	<div class="container" style="max-width: 1300px">
		<div class="titulo_dental d-block text-center">
			<div class="titulo_principal">
				<h2>Conoce nuestras especialidades</h2>
			</div>
			<div class="titulo_secundario">
				<span>Tenemos la mejor cartera de servicios del mercado</span>
			</div>
		</div>

		<div class="especialidades_items">
			<div class="text-center">
				<div class="slick_slider especialidades_section">
				<?php 
				$especialidades = (cs_get_option('especialidades'));
				foreach ($especialidades as $value) {?>
					<div class="contenedor ">
						<div class="icon <?php echo $value["especialidad_img"]; ?>" style="
							-webkit-mask-image: url(<?php echo get_template_directory_uri() ."/assets/images/dentristy/svg/" .  $value["especialidad_img"] . ".svg"?> );
							mask-image: url(<?php echo get_template_directory_uri() ."/assets/images/dentristy/svg/" .  $value["especialidad_img"] . ".svg"?>);" >
						 </div>
						<a href="<?php  echo $value["especialidad_url"]; ?>"><h5><?php echo $value["especialidad_titulo"]; ?></h5></a>
						<p><?php echo $value["especialidad_descr"]; ?></p>
					</div>
				<?php };
				?>
				</div>
					
			</div>
		</div>
	</div>

</section>