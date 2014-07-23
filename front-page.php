<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
get_header(); ?>
<div class="slider">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            
            <?php  if (get_theme_mod('slider_one') ) { ?>
              <img src="<?php echo get_theme_mod('slider_one'); ?>"/>
            <?php } else { ?>
            <img  src="<?php echo get_template_directory_uri() ?>/image/road.jpg" />
            <?php } ?>
           
      <!--<img src="http://center.kokenaddons.com/storage/cache/images/000/059/test,large.jpg?1381439836" style="width:100%;height:500px"/>-->
          <!--  <div class="carousel-caption">
              <h2>Suspendisse ornare, felis feugiat suscipit pharetra</h2>
              <p>Quisque sit amet sagittis justo. Suspendisse ornare, felis feugiat suscipit pharetra, lorem est viverra odio; tristique tristique diam tellus id tellus. In consectetur aliquet tristique. Curabitur imperdiet leo in nisl consectetur mattis. Quisque bibendum, mauris vitae suscipit ornare; est nibh elementum mauris, eu malesuada nunc magna at justo. Proin blandit id tellus non pellentesque. Mauris […]</p>
              <a class="frmore" href="http://demo.fabthemes.com/revera/2013/08/19/suspendisse-ornare-felis-feugiat-suscipit-pharetra/"> READ MORE </a>
            </div>-->
        </div>
        <div class="item">
            <?php  if (get_theme_mod('slider_two') ) { ?>
              <img src="<?php echo get_theme_mod('slider_two'); ?>"/>
            <?php } else { ?>
            <img  src="<?php echo get_template_directory_uri() ?>/image/home.jpg" />
            <?php } ?>
          
          <!--  <img src="http://www.etomicmail.com/wp-content/uploads/2013/12/unsplash_5245fd13bfb64_11.jpg" style="width:100%;height:500px"/>-->
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
            </div>
        </div>
        <div class="item">
            <?php  if (get_theme_mod('slider_three') ) { ?>
              <img src="<?php echo get_theme_mod('slider_three'); ?>"/>
            <?php } else { ?>
            <img  src="<?php echo get_template_directory_uri() ?>/image/bridge.jpg" />
            <?php } ?>
          
     <!--<img src="http://shirleyenebrad.com/wp-content/uploads/2014/04/black-and-white-mountain-900x440.png" style="width:100%;height:500px"/>-->
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna vel…</p>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
    
    
</div>
<div class="widgets">
   <div class="fwidgets">
       <div class="container">
           <div class="row">
               
               <div class="col-sm-4 homewidget">
                   
                   <?php if ( get_theme_mod('home_featured_one') ) {  ?>
                     <span><i class="glyphicon glyphicon-<?php echo get_theme_mod('home_featured_one'); ?>"></i></span>
                    <?php } else {  ?>
                     <span><i class="glyphicon glyphicon-heart"></i></span>
                     <?php } ?>
                     <?php if ( get_theme_mod('home_title_one') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_one')); ?></h3>
                  <?php } else {  ?> <h3><a href="#"><?php esc_html_e('User Interface', 'revera') ?></a></h3>
                           <?php } ?>
                  
                  <?php if ( get_theme_mod('home_description_one') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_one')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Attract your visitor&rsquo;s by displaying latest products.', 'revera') ?> </p>
                                           <?php } ?>



               </div>
               
               <div class="col-sm-4 homewidget">
                   <?php if ( get_theme_mod('home_featured_two') ) {  ?>
                     <span><i class="glyphicon glyphicon-<?php echo get_theme_mod('home_featured_two'); ?>"></i></span>
                    <?php } else {  ?>
                     <span><i class="glyphicon glyphicon-glass"></i></span>
                     <?php } ?>
                     
                     <?php if ( get_theme_mod('home_title_two') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_two')); ?></h3>
                  <?php } else {  ?> <h3><a href="#"><?php esc_html_e('Web Design', 'revera') ?></a></h3>
                           <?php } ?>
                  
                   <?php if ( get_theme_mod('home_description_two') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_two')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Attract your visitor&rsquo;s by displaying latest products.', 'revera') ?> </p>
                                           <?php } ?>
                   
                   
                   
               </div>
               
               <div class="col-sm-4 homewidget">
                   
                  <?php if ( get_theme_mod('home_featured_three') ) {  ?>
                     <span><i class="glyphicon glyphicon-<?php echo get_theme_mod('home_featured_three'); ?>"></i></span>
                    <?php } else {  ?>
                     <span>  <i class="glyphicon glyphicon-star"> </i> </span>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_three') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_three')); ?></h3>
                  <?php } else {  ?> <h3><a href="#"><?php esc_html_e('Web Development', 'revera') ?></a></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_three') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_three')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e(' Duis tempus leo vitae ipsum viverra, blandit condimentum sapien porttitor. Duis porttitor sed metus eget mollis. Curabitur bibendum imperdiet tortor, ut pulvinar purus elementum nspendisse at erat luctus..', 'revera') ?> </p>
                                           <?php } ?>
                   
                   
                   
               </div>
               
               
    
           </div>
       </div>
   </div>
</div>    
 <?php get_template_part('content','frontposts') ?>
    


    
    <?php get_footer(); ?>