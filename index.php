<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<h1><?php the_title(); ?></h1>
	<!-- thumbnail -->
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>"/></a>
	<?php
	}?> 
	<div class="post">
		<?php if ( is_category() || is_archive() || is_home() ) {
		the_excerpt();?>
		<a href="<?php the_permalink() ?>">Read More</a>
		<?php
		} else {
			the_content();
		} ?>
	</div>
	<?php
    endwhile;
    wp_reset_postdata();
	endif; ?>
</article>

<?php get_footer(); ?>