<?php get_header('inner'); ?> 
 <?php
    $show_content_only =  get_field('show_content_only');
    if ($show_content_only == 1) { ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h2 class="innerheading"><?php the_title();?></h2>
            <?php the_content(); ?>
        <?php
        endwhile;
        endif;
        //Reset Query
        wp_reset_query();           
        ?> 
   <?php } else {  ?> 
    
    <div id="dts-inner_content">
      <div class="container container-md">
        <div class="row">
          <div class="col-sm-9 text-center">
                   <?php  
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                $backgroundImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); 
                ?>   
            <div class="content-wrap">
                    <?php the_content();?> 
                 <?php /*?> <div class="author">
                    <div class="author--img">
                    </div><!--author--img-->  
                   <h4><span><?php the_author();?></span><span class="border-left">Published on <?php the_time(' F j, Y '); ?></span></h4>
                 </div><?php */?>
                   <?php 
                endwhile; 
                endif; 
                //Reset Query 
                wp_reset_query(); 
                ?>  

            </div><!-- content-wrap -->
          </div><!-- col-sm-12 -->
             <div class="col-sm-3">
             <?php get_sidebar();?>
           </div>
        </div><!-- row -->
      </div><!-- container -->
    </div> <!--inner_content -->  
 <?php } ?> 
<?php get_footer(); ?>