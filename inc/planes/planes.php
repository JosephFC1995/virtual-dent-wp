<section class="planes">
	<div class="container">
		<div class="titulo_dental d-block text-center">
			<div class="titulo_principal">
				<h2>Tenemos un plan para cada usuario.</h2>
			</div>
			<div class="titulo_secundario">
				<span>Planes totalmente personalizados para distintos usuarios.</span>
			</div>
		</div>
		<div class="planes_contenedor">
			<div class="row planes_items">
				<?php $planes = (cs_get_option('planes_items')); ?>
				<?php foreach ($planes as $value) { ?>
					
				<div class="col-xl-4 usuarios_planes ">
					<div class="image_back <?php echo $value["plan_titulo"]; ?>" style="background-image: url( <?php echo $value["plan_back"]; ?> ) ; cursor: -webkit-grab;">
						<div class="title_front d-flex align-items-center">
							<i class="<?php echo $value["icono_plan"] ?>"></i>
							<h5><?php echo $value["plan_titulo"] ?></h5>
						</div>
						<div class="contenido_back_bot">
							
							<i class="<?php echo $value["icono_plan"] ?>"></i>
							<div class="title_back">
								<h5><?php echo $value["plan_titulo"] ?></h5>
							</div>
							<span><?php echo $value["descripcion_plan"] ?></span>
						</div>
					</div>
				</div>

				<?php  }?>

			</div>
		</div>
	</div>
</section>