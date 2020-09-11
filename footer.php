
<?php wp_footer(); ?>
<script type="text/javascript" src="https://cdn.zingchart.com/zingchart.min.js"></script>
<footer class="footer">
	<div class="container">
		<div class="row">
		<div class="col-xl-4 col-lg-6">
			<?php if (!dynamic_sidebar('widget_footer_1')) {} ?>
		</div>
		<div class="col-xl-2 d-none d-xl-block">
			<?php if (!dynamic_sidebar('widget_footer_2')) {} ?>
		</div>
		<div class="col-xl-3 d-none d-xl-block">
			<?php if (!dynamic_sidebar('widget_footer_3')) {} ?>
		</div>
		<div class="col-xl-3 col-lg-6 d-flex align-items-center footer_space ">
			<div class="border-wf"></div>
			<div class="datos_finales">
				<div class="datos_sfd telefono d-flex align-items-center justify-content-sm-center justify-content-lg-start">
					<i class="fas fa-phone-volume"></i>
					<div class="box"><?php echo cs_get_option('telefono'); ?></div>
				</div>
				<div class="datos_sfd direccion d-flex align-items-center justify-content-sm-center justify-content-lg-start">
					<i class="fas fa-map-marker"></i>
					<div class="box"><?php echo cs_get_option('direccion_primera_linea') ?> <br><?php echo cs_get_option('direccion_segunda_linea') ?></div>
				</div>
				<div class="datos_sfd correo d-flex align-items-center justify-content-sm-center justify-content-lg-start">
					<i class="far fa-envelope"></i>
					<div class="box"><?php echo cs_get_option('correo'); ?></div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container">
		<div class="copyrate">
			<div class="row">
				<div class="col-lg-6 col-md-12 text-xl-left text-center">© 2018 - VirtualDent. Todo los derechos reservadas</div>
				<div class="col-lg-6 col-md-12 text-xl-right text-center"> Creado con <i class="fas fa-heart"></i> y <i class="fas fa-coffee"></i> en Lima - Perú por <a href="mailto:josefc9512@gmail.com" target="_blank">Joseph</a></div>
			</div>
		</div>
	</div>

	<?php if (cs_get_option('activador_chats')): ?>
	<div class="boton-flotante">
		<div class="chat_virtualdent">
			<?php if (cs_get_option('activador_chats_messenger')): ?>
			<a href="//m.me/<?php echo cs_get_option("chat_mesenger") ?>/" target="_blank" class="messenger">
				<div class="boton-messenger">
					<i class="fab fa-facebook-messenger"></i>
					<span><?php echo cs_get_option("chat_mesenger_texto") ?></span>
				</div>
			</a>
			<?php endif ?>
			<?php if (cs_get_option('activador_chats_whatsapp')): ?>
			<a href="//api.whatsapp.com/send?phone=51<?php echo cs_get_option("chat_whatsapp")?>" target="_blank" class="whatsapp">
				<div class="boton-whatsapp">
					<i class="fab fa-whatsapp"></i>
					<span><?php echo cs_get_option("chat_whatsapp_texto")?></span>
				</div>
			</a>
			<?php endif ?>
		</div>

		<div class="boton-chats">
				<i class="far fa-comments"></i>
				<?php if (!(cs_get_option('chat_chats_texto') == NULL)): ?>
				<span><?php echo cs_get_option("chat_chats_texto")?></span>
				<?php endif ?>

		</div>
	</div>
	<?php endif ?>
</footer>
</body>
</html>