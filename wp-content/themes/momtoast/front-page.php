<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package momtoast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
					<div class="lead-img">
						<div class="white-box">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$momtoast_description = get_bloginfo( 'description', 'display' );
							if ( $momtoast_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $momtoast_description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?>
						</div>
					</div>

					<div class="front-row">
						<div class="front-post">
							<?php $the_query = new WP_Query(array(
								'posts_per_page' => '1'
							));
							 while ( $the_query->have_posts() ) :
								$the_query->the_post(); ?>

								<div class="post-category">
									<h4><?php the_category() ?></h4>
								</div>

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

						<div class="front-post2">
							<?php $the_query = new WP_Query(array(
								'category_name' => 'portfolio',
								'posts_per_page' => '1'
							));
							 while ( $the_query->have_posts() ) :
								$the_query->the_post(); ?>

								<div class="post-category">
									<h4><?php the_category() ?></h4>
								</div>

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

						<div class="front-post3">
							<?php $the_query = new WP_Query(array(
								'category_name' => 'advice',
								'posts_per_page' => '1'
							));
							 while ( $the_query->have_posts() ) :
								$the_query->the_post(); ?>

								<div class="post-category">
									<h4><?php the_category() ?></h4>
								</div>

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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
