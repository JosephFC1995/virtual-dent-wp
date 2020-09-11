<header>
	<div class="container">
		<!---CABECERA CON DATOS IMPORTANTES DE LA EMPRESA-->
		<div class="datos_empresa d-none d-xl-block">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="dental_datos_top horario align-items-center">
						<i class="far fa-clock "></i>
						<div class="cuerpo">
							<div class="cabecera">Horarios</div>
							<span class="contenido"><?php echo cs_get_option( 'horario' ); ?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="dental_datos_top ubicacion align-items-center">
						<i class="fas fa-map-marker"></i>
						<div class="cuerpo">
							<div class="cabecera"><?php echo cs_get_option('direccion_primera_linea') ?></div>
							<span class="contenido"><?php echo cs_get_option('direccion_segunda_linea') ?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="dental_datos_top correo align-items-center">
						<i class="far fa-envelope"></i>
						<div class="cuerpo">
							<div class="cabecera">Correo</div>
							<span class="contenido"><?php echo cs_get_option('correo') ?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="dental_datos_top telefono align-items-center">
						<i class="fas fa-phone-volume"></i>
						<div class="cuerpo">
							<div class="cabecera"><?php echo cs_get_option('telefono'); ?></div>
							<span class="contenido"><?php echo cs_get_option('celular_phone') ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---FIN CABECERA CON DATOS IMPORTANTES DE LA EMPRESA-->
		<!---INICIO CONTENEDOR DE LOGO Y MENU-->
		<div class="menu_logo">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand logo" href="<?php echo get_home_url() ?>"><img src="<?php echo cs_get_option('logo_site'); ?>" alt=""></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
			    </div>
			  </div>
			</nav>
		</div>
		<div class="menu_logo_flotante fixed-top">
			<div class="container">
				<div class="menu_logo">
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo cs_get_option('logo_site'); ?>" alt=""></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup_fixed" aria-controls="navbarNavAltMarkup_fixed" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="">
				    <div class="navbar-nav">
				      <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
				    </div>
				 </div>
				</nav>
				<div class="collapse navbar-collapse d-lg-none" id="navbarNavAltMarkup_fixed">
				    <div class="navbar-nav">
				      <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
				    </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!---INICIO SLIDER-->
	<div id="carouselExampleControls" class="carousel carousel-fade" data-ride="carousel">
	  <div class="carousel-inner">
		<?php $slider = (cs_get_option('slider_grupo'));  
		$contador = 1;
		foreach ($slider as $value) {
		if ($contador == 1) {$clase = 'active';} else $clase = '';?>
	    <div class="carousel-item <?php echo $clase; ?> d-flex">
	    	<div class="back-img"></div>
	      	<img class="cover w-100" src="<?php echo $value['portada_slider']; ?>"  alt="First slide">
		  	<div class="carousel-caption  d-md-block align-items-center">
			    <h1><?php echo $value['titulo_slider']; ?></h1>
			    <p><?php echo $value['parrafo_slider']; ?></p>
			  </div>
	   </div>
		<?php 
		$contador++;
		} ?>

	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!---FIN SLIDER-->
	<!---INICIO BIENVENIDA-->
	<div class="bot_slider">
		<div class="container">
			<div class="bienvenida_container">
				<div class="row ">
					<div class="col-xl-4 col-md-12  box hola">
						<h3><?php echo cs_get_option('bienvenida_header'); ?></h3>
						<span><?php echo cs_get_option('bienvenida_contenedor'); ?></span>
					</div>
					<div class="col-xl-4 col-md-12  box horarios d-flex align-items-center">
						<div class="d-block justify-content-center w-100">
							<?php  $valor = (cs_get_option('horario_selector'));  
							foreach ($valor as $value) {
								echo '<li><span class="">'. $value['horario_selector_select_day'] .' </span><span class="float-right text-right">'.  $value['horario_selector_select_hora'] .'</span></li>';
							};
							 ?>
						</div>
					</div>
					<div class="col-xl-4 col-md-12  box datos align-items-center d-flex justify-content-center">
						<div class="d-block">
							<div class="item telefono d-flex align-items-center">
								<i class="fas fa-phone-volume"></i>
								<div class="contenido">
									<span class="cabecera">Numero de contacto</span>
									<h4 class="label"><?php echo cs_get_option('telefono'); ?></h4>
								</div>
							</div>
							<div class="item correo d-flex align-items-center">
								<i class="far fa-envelope"></i>
								<div class="contenido">
									<span class="cabecera">Correo</span>
									<h4 class="label"><?php echo cs_get_option('correo'); ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if (cs_get_option('switch_anuncio')): ?>
		<div class="alerta">
			<div class="container text-center">
				<span class="anuncio <?php echo cs_get_option('tipo_anuncio'); ?>"><i class="fas fa-exclamation"></i><?php echo cs_get_option('tipo_anuncio'); ?></span><span class="demas"><?php echo cs_get_option('contenido_anuncio'); ?></span>
			</div>
		</div>
		<?php else: ?>
		<div style="padding: 0.5rem;display: block;"></div>	
		<?php endif ?>
	</div>
</header>

