<section id="virtudes" class="virtudes" style="background-color: <?php echo cs_get_option('color_virtudes') ?> ">
		<div class="container">
			
			<div class="virtudes_items">
				<div class="row align-items-center">
					<div class="col-lg-5 img_virtud ">
						<img src="<?php echo cs_get_option('image_virtud') ?> " alt="">
					</div>
					<div class="col-lg-7 contenido_virtudes">
						<h3><?php echo cs_get_option('titulo_apartado_virtudes') ?></h3>
						<span><?php echo cs_get_option('sub_titulo_apartado_virtudes') ?></span>
						<div class="row">
							<?php 
							$virtudes = (cs_get_option('virtudes_grupo'));
							foreach ($virtudes as $value) {
							 ?>
							<div class="col-lg-6 d-flex align-items-center items">
								<div class="icono " style="-webkit-mask-image: url(<?php echo get_template_directory_uri() ?>/assets/images/denta_ico/svg/<?php echo $value['virtud_img_select'] . ".svg" ?>);mask-image: url(<?php echo get_template_directory_uri() ?>/assets/images/denta_ico/svg/<?php echo $value['virtud_img_select'] . ".svg" ?>);"></div>
								<div class="contenido ">
									<h5><?php echo $value['virtud_titulo'] ?></h5>
								</div>
							</div>
							<?php }; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

</section>