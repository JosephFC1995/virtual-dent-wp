<?php get_header(); ?>
<?php include get_template_directory().'/inc/headers/header.php' ?>
<div class="container categorias_page">
	<div class="row">
		<div class="col-xl-8">
			<?php
			$s=get_search_query();
			$args = array('s' =>$s);
			    // The Query
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
			        _e("<h2 style='font-weight:600;' class='titulo_busqueda'>Resultados de la busqueda: ".get_query_var('s')."</h2>");
			        while ( $the_query->have_posts() ) {
			           $the_query->the_post();
			                 ?>
			                    <li class="categorias_list">
			                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			                    </li>
			<?php
			        }
			    }else{
			?>
			        <h2 style='font-weight:bold;' class='titulo_busqueda'>Nothing Found</h2>
			        <div class="alert alert-info">
			          <p>Lo siento, pero no hemos encontado nada con ese criterio de busqueda.</p>
			        </div>
			<?php } ?>
		</div>
		<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
	</div>
</div>




<?php get_footer() ?>
