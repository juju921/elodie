<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elodie_martins
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content " >
		<div class="the_post_thumbnail ">
			<a href="<?php  echo get_permalink(); ?>" rel="bookmark" title="<?php echo  get_the_title(); ?>">
			<?php the_post_thumbnail("first-article"); ?>
			</a>
		</div>
		<div class="content-article">



			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="'.get_the_title().'">', '</a></h2>' );

				endif; ?>


			</header><!-- .entry-header -->
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php elodie_martins_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
			endif; ?>

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'elodie_martins' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elodie_martins' ),
				'after'  => '</div>',
			) );
		?>
			<footer class="entry-footer">

				<?php elodie_martins_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>






	</div><!-- .entry-content -->

</article><!-- #post-## -->
