<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<div class="col-md-4">
	<article class="single-from-blog">
		<figure>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</figure>
		<div class="blog-title">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<p>Posted by <a class="blog-admin" href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a>
				on <span class="blog-date"><?php the_time('jS F Y') ?></span></p>
		</div>
		<?php the_content(); ?>
		<div class="blog-footer">
			<a href="#"><span class="fa fa-comment"></span><?php comments_number(); ?>Comments</a>
			<a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
		</div>
	</article>
</div>


