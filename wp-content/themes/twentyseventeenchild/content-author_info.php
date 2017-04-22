<?php
/**
 * Template for displaying art custom post type entries
 */
?>	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<p>Author: <?php the_field('author_name'); ?></p>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<p><img src="<?php the_field('author_photo'); ?>" alt="Photo of <?php the_title(); ?>"></p>
		<p>Also writes as <?php the_field('author_pennames'); ?></p>
		<p>Favorite Series: <?php the_field('series_1'); ?></p>
		<p>Other Series: <?php the_field('series_2'); ?></p>
		<p>Bio <?php the_field('author_bio'); ?></p>

	</div><!-- .entry-content -->	

</article><!-- #post -->
