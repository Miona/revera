<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Revera
 */

get_header(); ?>
<div class="blog-page"> 
    <div class="container">
    <?php if ( get_theme_mod('blog') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('blog')); ?></h3>
                  <?php } else {  ?> <h3><a href="#"><?php esc_html_e('Title', 'revera') ?></a></h3>
                           <?php } ?>
     <?php if ( get_theme_mod('blog_tagline') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('blog_tagline')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Articles from blog', 'revera') ?> </p>
                                           <?php } ?>
                              </div>
</div>
<div class="container">
<div class="col-md-8">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php revera_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>
    </div>
<div class="col-md-4">
<?php get_sidebar(); ?>
    </div>
</div>   
<?php get_footer(); ?>