 <?php get_header('inner');?> 
<div id="thankyou_page">
    	<div class="container inner_container">
        	<div class="row">	
            	<div class="col-sm-12 small_screen_center">
                	<div class="news_content">
                    	<div class="heading_text text-center">
                            <h3>Read Our IT News & Updates</h3>
                        </div><!--heading_text-->
                    	<div class="news_section">
                            <div class="row">
                             <?php
                            query_posts('posts_per_page=9&category_name=blog');   
                            if ( have_posts() ) : while ( have_posts() ) : the_post();
                            $backgroundImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); 
                            ?> 
                            	 <div class="col-sm-4 padding">
                                    <div class="news_wrap">
										<?php if (has_post_thumbnail()):?>
                                    <div class="news_img img<?php echo $cnt;?>" style="background-image:url(<?php the_post_thumbnail_url();?>);">
                                   		 <?php  else : ?> 
                                    <div class="news_img img<?php echo $cnt;?>" style="background-image:url(<?php echo getFirstImage(); ?>); ">
                                   		 <?php endif;?>  
                                        </div><!--news_img-->
                                        <div class="news_text">
                                        	<div class="text_content">
                                               <p><?php the_title();?></p>
                                                <a href="<?php the_permalink();?>">Read more</a>
                                            </div><!--text_content-->
                                        </div><!--news_text-->
                                    </div><!--news_wrap-->
                                </div><!--col-sm-4-->
                                  <?php
                                endwhile;
                                endif;
                                //Reset Query
                                wp_reset_query();											
                                ?>
                            </div><!--row-->
                        </div><!--news_section-->
                         <div class="btn_wrap text-center">
                                <a href="<?php bloginfo('url'); ?>/category/blog" class="btn_content"><span>Read more</span></a>
                            </div><!--read_btn-->
                    </div><!--news_content-->
                	<div id="video-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="video-table-wrap">
               <?php query_posts('posts_per_page=2&category_name=video-library');
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="video-content">
                <div class="left-video overlay-bg">
                      <?php the_content();?>
                  <a href="<?php the_permalink();?>" class="play-btn"></a>
               
                </div><!-- left video -->
              </div><!-- video-content -->
               <?php endwhile; endif; wp_reset_query(); ?>
            </div><!-- video table wrap -->
          </div><!-- col sm 12 -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- video section -->
                </div><!--col-sm-12-->
            </div><!--row-->
        </div><!--container-->
    </div><!--thankyou_page-->
<?php get_footer(); ?> 