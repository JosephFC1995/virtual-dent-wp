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
			  <a class="navbar-brand logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo cs_get_option('logo_site'); ?>" alt=""></a>
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
</header>

