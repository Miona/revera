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
<div class="bottom">
<div class="container">
     <div class="row ">
        
        
        <div class="foot col-sm-3 widget_text">
             <?php dynamic_sidebar( 'home-footer-2' ); ?>
        </div>
    
   
        <div class="foot col-sm-3 widget_meta">
            <?php dynamic_sidebar( 'home-footer-3' ); ?>
        </div>
         <div class="foot col-sm-3 widget_archive">
            <?php dynamic_sidebar( 'home-footer-4' ); ?>
         </div>
          <div class="foot col-sm-3 widget_recent_entries">  
      <?php dynamic_sidebar( 'home-footer-5' ); ?>
          </div>
        
         </div>
  </div>
</div>   

<footer id="colophon" class="site-footer foot" role="contentinfo">
	<div class="container">
		<div class="row">
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