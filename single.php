<?php get_header(); ?>
<?php  include get_template_directory().'/inc/headers/header.php' ?>

		<div class="post_contend">
			<?php
			global $post;
			$author_id=$post->post_author;
			$post_title=$post->post_title;
			$numb_comment = $post ->comment_count;
			?>
			<div class="post_thumb">
				<div class="post_ab">
					<div class="thumb_back w-100" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?>);"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="pagina_contenido" style="margin-top: 0rem;">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="container post_back_info">
							<div class="post_information">
							<div class="basic_infor text-uppercase">
								<span class="category">
									<?php foreach((get_the_category()) as $category) { 
										$categoria =  $category->cat_name . ' ';
										$categoria_link = get_category_link( $category ->cat_ID );?>	
										<a href=" <?php echo $categoria_link ?> "> <?php echo $categoria?></span></a> 
									<?php
									} 
									?>	
								</span> 
								<span> / </span>
								<span class="time">	<time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time( 'F' ); the_time(' d, Y'); ?></time></span>
								<span > / </span>
								<span class="author"><?php echo the_author_meta( 'user_nicename', $author_id ); ?></span>
								<span > / </span>
								<span><?php echo $numb_comment . ' comentarios'; ?></span>
							</div>
							<h1 class="title_post text-uppercase"><?php echo $post_title; ?></h1>
							</div>
							</div>
							<div class="post_body">
						     	<?php the_content(); ?>
						     </div>
							<div class="row">
								<div class="col-xl-9 text-sm-center text-xl-left">
								     <div class="tags_dental">
								     	<span>TAGS:</span>
								     	<?php 
								     	$post_tags = get_the_tags();?>
										<?php if ( $post_tags ) {
										    foreach( $post_tags as $tag ) {
										    echo '<span class="tags_items">'.$tag->name . '</span>' ; 
										    }
										}
										 ?>

								     </div>
								</div>
								<div class="col-xl-3 text-sm-center text-xl-center d-flex align-items-center justify-content-sm-center justify-content-xl-center">
									<div class="shared_links">
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="fb"><i class="fab fa-facebook"></i></a>
										<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>%20por%20@ayudawp" class="twitter"><i class="fab fa-twitter-square"></i></a>
										<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="googleplus"><i class="fab fa-google-plus-square"></i></a>
									</div>
								</div>
							</div>
						     <div class="comentarios_dental">
						     	<?php comments_template( '', true ); ?>
						     </div>
							 <?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</div>

<?php get_footer( ); ?>