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
           
<img src="http://31.media.tumblr.com/1d38289e9d0fface49c0381ae4cc7c99/tumblr_n3ktxaKh9h1s4wbdoo1_500.gif" style="width:100%;height:400px"/>
            <div class="carousel-caption">
              <h2>Suspendisse ornare, felis feugiat suscipit pharetra</h2>
              <p>Quisque sit amet sagittis justo. Suspendisse ornare, felis feugiat suscipit pharetra, lorem est viverra odio; tristique tristique diam tellus id tellus. In consectetur aliquet tristique. Curabitur imperdiet leo in nisl consectetur mattis. Quisque bibendum, mauris vitae suscipit ornare; est nibh elementum mauris, eu malesuada nunc magna at justo. Proin blandit id tellus non pellentesque. Mauris […]</p>
              <a class="frmore" href="http://demo.fabthemes.com/revera/2013/08/19/suspendisse-ornare-felis-feugiat-suscipit-pharetra/"> READ MORE </a>
            </div>
        </div>
        <div class="item">
          
<img src="http://37.media.tumblr.com/tumblr_lwnhifWg9Z1qh81keo1_500.jpg" style="width:100%;height:400px" >
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
            </div>
        </div>
        <div class="item">
          
     <img src="http://s3.amazonaws.com/data.tumblr.com/tumblr_lbxn1oPIzG1qa1ihvo1_r1_1280.jpg?AWSAccessKeyId=AKIAI6WLSGT7Y3ET7ADQ&Expires=1405786206&Signature=Qnl6XJ6JNT3XrKh65iS1hexSVLE%3D#" style="width:100%;height:400px"/>
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
               
               <?php dynamic_sidebar( 'Sidebar-3' ) ; ?>
               
               
                <?php dynamic_sidebar( 'Sidebar-4' ) ; ?>
           
                
                 <?php dynamic_sidebar( 'Sidebar-5' ) ; ?>
    
           </div>
       </div>
   </div>
</div>    
    


<div class="container">
    <div class="row">
        <div class="section-title col-12">
		<h2> Latest Articles</h2>
		<p>Latest posts from the blog </p>
	</div>
        <div class="box-items">
            
             <?php dynamic_sidebar( 'Sidebar-6' ) ; ?>
            
            
       
         
            
             <?php dynamic_sidebar( 'Sidebar-7' ) ; ?>
            
        
         
            
             <?php dynamic_sidebar( 'Sidebar-8' ) ; ?>
            
            <?php dynamic_sidebar( 'Sidebar-9' ) ; ?>
            
        </div>
        
        
    </div>
    
    
</div>