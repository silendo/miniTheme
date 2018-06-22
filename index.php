<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<p class="entry-meta">
					<?php the_time('d.m.Y'); ?> | <?php comments_number( '0 komentarzy', '1 komentarz', '% komentarzy'); ?>
				</p>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
			<div id="pagination">
				<div id="next-link"><?php next_posts_link( '<i class="fas fa-angle-double-left"></i> Starsze wpisy' ); ?></div>
				<div id="prev-link"><?php previous_posts_link( 'Nowsze wpisy <i class="fas fa-angle-double-right"></i>' ); ?></div>
			</div>
		<?php else : ?>
			<p><?php esc_html_e( 'Na razie nie ma nic.' ); ?></p>
		<?php endif; ?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>