<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package momtoast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) ); ?>
		<div class="full-post">
			<div class="title-block">
					<img class ="featured-img" src="<?php echo $backgroundImg[0]; ?>" />
					<span class="title-words">
						<ul>
							<li class="date"><?php the_date() ?></li>
						  <li><a href ="category"><?php the_category () ?></a></li>
						</ul>
						<h2 class="post-title"><?php the_title () ?></h2>
					</span>
					<div class="divider">
					</div>
			</div>
			<div class="post">
    <p class="post-content"><?php the_content () ?></p>
  </div>

  <div class="post-foot">
    <?php the_tags () ?>
  </div>
</div>

	<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
