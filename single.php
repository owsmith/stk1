<?php
/**
 * The template for displaying all single posts.
 *
 * @package storktv
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area column two-thirds">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
					<div class="entry-meta">
						<?php storktv_posted_on(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'storktv' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			
				<footer class="entry-footer">
					<?php storktv_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php storktv_post_nav(); ?>

		

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>