<?php 
  get_header('inner'); 
  $show_content_only =  get_field('show_content_only');
  if ($show_content_only == 1) : 
    if (have_posts()) : while (have_posts()) : the_post(); 
           
      the_content(); 
    
    endwhile;endif;wp_reset_query();     
  else : ?> 
  <div id="content_page">
  	<div class="container inner_container">
    	<div class="row">
        	<div class="col-sm-9 width_1">
            <?php 
              if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>   
            	<div class="text_content">
                  <?php the_content();?>
              </div><!--text_content-->
            <?php  
              endwhile;  endif; wp_reset_query(); 
            ?>  
            </div><!--col-sm-9-->
           <?php get_sidebar('blog');?>
        </div><!--row-->
    </div><!--container-->
  </div><!--content_page-->   
<?php 
  endif;
  get_footer('inner'); 
?>