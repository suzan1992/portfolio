<?php get_header('inner'); ?> 
<div id="blog_section">
<div id="scroll_content"></div>
   <div class="container">
      <div class="row">
         <div class="col-sm-12 small_screen_center">
            <?php 
                query_posts('paged='.get_query_var('paged'));
                if (have_posts()):
                while (have_posts()) : the_post(); 
                $backgroundImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
            ?>
            <div class="blog_block">
               <div class="wrapper">
                  <div class="row">
                     <div class="col-sm-5">
                         <a href="<?php the_permalink(); ?>"><div class="blog_img" style="background-image: url( <?php if(has_post_thumbnail()){
                           the_post_thumbnail_url();
                           }else{ echo getFirstImage();} ?>);">
                        </div></a>
                     </div>
                     <div class="col-sm-7">
                        <div class="blog_description">
                           <div class="blog_top_content">
                              <a href="<?php the_permalink(); ?>">
                                 <h2><?php the_title();?></h2>
                              </a>
                              <div class="blog_topwrap">
                                 <div class="client_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/client_img.png" alt="Client Img"/>
                                 </div>
                                 <div class="blog_ttilewrap">
                                    <ul class="blog_listing list-unstyled">
                                       <li><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_profile.png" alt="Icon"/><?php the_author();?></a></li>
                                       <li><a><img src="<?php echo get_template_directory_uri(); ?>/images/calendar_icon.png" alt="Icon"/><?php the_time(' F jS, Y ') ?></a></li>
                                    </ul>
                                 </div>
                                 <!-- EOF BLOG_TITLEWRAP -->
                              </div>
                              <!-- EOF BLOG_TOPWRAP -->
                              <p><?php echo substr(strip_tags(get_the_content()),0,150); ?></p>
                              <span class="read_btn button_slide slide_right">
                              <a href="<?php the_permalink();?>" >keep Reading</a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- EOF COL-SM-8 -->
               </div>
               <!-- EOF ROW -->
            </div>
            <!-- EFO WRAPPER -->
            <?php endwhile; ?>
            <div id="pagination">
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 
            </div> 
            <?php else : ?>             
            <div class="no_records"><b>Sorry, but you are looking for something that isn't here. please try again later</div>
            <?php 
            endif; 
            wp_reset_query(); ?> 
         <!-- EOF COL-SM-12 -->
      </div>
      <!-- EOF ROW -->
   </div>
   <!-- EOF CONTAINER-->
</div>
<?php get_footer(); ?>