<?php
/**
 * The Template for displaying all single posts.
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

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php revera_content_nav( 'nav-below' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>