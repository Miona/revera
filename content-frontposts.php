<?php
/**
 * The template for displaying featured posts on Front Page 
 *
 * @package Superb
 * @since Superb 1.0
 */
?>

<?php
// Start a new query for displaying featured posts on Front Page


        $featured_count = 4;
   
    $var = get_theme_mod('revera_front_featured_posts_cat');

    // if no category is selected then return 0 
    $featured_cat_id = max((int) $var, 0);

    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => $featured_count,
        'cat' => $featured_cat_id,
        'post__not_in' => get_option('sticky_posts'),
    );
    $featuredposts = new WP_Query($featured_post_args);
    ?>
  <div class="container">
    
    <div id="front-featured-posts">
        <div class="home-post-title-area" id="post-title">
            <div class="home-post-title">
            <?php if ( get_theme_mod('revera_post_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('revera_post_title')); ?></h3>

                          <?php } else {  ?> <h3><?php esc_html_e('Recent Posts', 'revera') ?></h3>
                                   <?php } ?>
            </div>
        </div>
        <div id="featured-posts-container" class="row">
            
            <div id="featured-posts" class="col-md-12">
                
                <?php if ($featuredposts->have_posts()) : $i = 1; ?>

                    <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>

                        <div class="col-md-3 home-featured-post">

                            <div class="featured-post-content">
                                <div class="entry-header">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if(has_post_thumbnail()) {
                                            the_post_thumbnail( 'post_feature_thumb' ); 
                                        } ?>
                                         <h3 class="home-featured-post-title"><?php the_title(); ?></h3>
                                    </a>

                                    <span class="post-meta">
                                        <small><?php the_time(esc_html('j M','revera')); ?> </small>
                                    </span>
                                </div>
                            
                            <?php the_excerpt(); ?>
                              </div> <!--end .featured-post-content -->

                        </div><!--end .home-featured-post-->

                        <?php $i+=1; ?>

                    <?php endwhile; ?>

                <?php else : ?>

                    <h2 class="center"><?php esc_html_e('Not Found', 'revera'); ?></h2>
                    <p class="center"><?php esc_html_e('Sorry, but you are looking for something that is not here', 'revera'); ?></p>
                    <?php get_search_form(); ?>
                <?php endif; ?>

            </div> <!-- /#featured-posts -->

        </div> <!-- /#featured-posts-container -->

    </div> <!-- /#front-featured-posts -->
  </div>

<?php
// end Featured post query ?>