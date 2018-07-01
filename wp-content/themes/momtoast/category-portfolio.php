<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package momtoast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $the_query = new WP_Query(array(
				'posts_per_page' => '1', 'category_name' => 'portfolio' 
			));

			while ( $the_query->have_posts() ) :
			 $the_query->the_post(); ?>

			 <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

		<div class="lead-img-blog" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">

			<div class="white-box">

				<div class="post-title">
					<a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
				</div>

				<div class="post-excerpt">
					<?php the_excerpt() ?>
				</div>

				<div class="post-link">
					<a href="<?php the_permalink() ?>">read more</a>
				</div>

			<?php endwhile; // End of the loop.
						?>
			</div>
		</div>

		<div class="blog-posts">
				<?php echo do_shortcode("[post_grid id='47447']"); ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
