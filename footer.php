<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Revera
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer foot" role="contentinfo">
	<div class="container">
		<div class="row">
                    
                    
        <div class="footer-widget col-lg-3 col-md-6 col-sm-12 ">
             <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
    
   
        <div class="footer-widget col-lg-3 col-md-6 col-sm-12">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
         <div class="footer-widget col-lg-3 col-md-6 col-sm-12">
            <?php dynamic_sidebar( 'footer-3' ); ?>
         </div>
          <div class="footer-widget col-lg-3 col-md-6 col-sm-12">  
      <?php dynamic_sidebar( 'footer-4' ); ?>
          </div>
        

                    
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<?php do_action( 'revera_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'revera' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'revera' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php echo get_theme_mod('revera_footer_footer_text'); ?>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->


</body>
</html>