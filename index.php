<?php
/**
 * The main template file
 *
 * @author hamam fajar <hamamfajar@gmail.com>
 * @package Genozy.com
 * @copyright 2016
 */
?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-preview">
 	<?php else : ?>
 		<div class="post-preview">
 	<?php endif; ?>

 	<!-- Display the Title as a link to the Post's permalink. -->
 	<h2 class="post-title">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  </h2>

 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 	<p class="post-meta"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>

 	<!-- Display the Post's content in a div box. -->
 	<div class="post-subtitle">
 		<?php the_content(); ?>
 	</div>

 	<!-- Display a comma separated list of the Post's Categories. -->
 	<p class="post-meta"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
 	</div> <!-- closes the first div box -->
  </hr>

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<!-- REALLY stop The Loop. -->
<?php endif; ?>

  </div>
</div>


<?php get_sidebar(); ?>


<?php get_footer(); ?>
