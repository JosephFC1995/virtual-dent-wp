<section class="calendario" style="background-image: url(<?php echo cs_get_option('calendario_back') ;?>);">
	<section class="container">
		<div class="row align-items-center">
			<div class="col-xl-6">
				<div class="row">
					<div class="col-12">
						<div class="preguntas_antes d-flex align-items-center">
							<i class="fas fa-info-circle"></i>
							<div class="contenido">
								<h4>Antes de Reservar</h4>
								<span>Lea atentamente algunas recomendaciones</span>
							</div>
						</div>
						<div class="bot_titulo text-center">
							<span>Preguntas - Respuestas</span>
						</div>
					</div>
					<div class="col-12">
						<div id="accordion">
							<?php $preguntas = (cs_get_option('grupo_preguntas')); ?>
							<?php $contador = 1; ?>
							<?php foreach ($preguntas as  $value) {?>
							<?php if ($contador == 1) {$aria_expanded = 'show';}else $aria_expanded = ''; ?>
							  <div class="card">
							    <div class="card-header" id="<?php echo $value['apodo_pregunta'] ?>" data-toggle="collapse" data-target="<?php echo '#' . $contador ?>" aria-expanded="<?php echo $aria_expanded ?>" aria-controls="<?php echo $contador ?>">
							      <h5 class="mb-0">
							        <a class="btn btn-link" >
							          <?php echo $contador . '. '  . $value['pregunta_titulo']; ?>
							        </a>
							      </h5>
							    </div>

							    <div id="<?php echo  $contador ?>" class="collapse <?php echo $aria_expanded ?>" aria-labelledby="<?php echo $value['apodo_pregunta'] ?>" data-parent="#accordion">
							      <div class="card-body">
							        <?php echo $value['pregunta_contenido']; ?>
							      </div>
							    </div>
							  </div>
							<?php  $contador++; ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<?php if (!dynamic_sidebar('widget_calendario_front')) {} ?>
			</div>
		</div>
	</section>
</section>