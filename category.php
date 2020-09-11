
<?php get_header(); ?>
<?php include get_template_directory().'/inc/headers/header.php' ?>
<div class="container">
	<div class="row">
		<div class="col-xl-8">
				<div id="content" role="main">
				 
				<?php 
				// Check if there are any posts to display
				if ( have_posts() ) : ?>
				 
				<header class="header_categorias">
				<h1 class="archive-title">Categoria: <?php echo single_cat_title( '', false ); ?></h1>
				 
				 
				<?php
				// Display optional category description
				 if ( category_description() ) : ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
				</header>
				 
				<?php
				 
				// The Loop
				while ( have_posts() ) : the_post(); ?>
				<div class="category_post">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<small><?php the_time('F jS, Y') ?> </small>
				 </div>
				<?php endwhile; 
				 
				else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				 
				 
				<?php endif; ?>
				</div>

		</div>
		<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
	</div>
</div>




<?php get_footer() ?>
