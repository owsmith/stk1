<?php
/**
 * The main template file.
 *
 *
 * @package storktv
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area column two-thirds">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
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
					</div><!-- .entry-content -->
				
					<footer class="entry-footer">
						<?php storktv_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php storktv_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
