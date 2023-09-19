<?php get_header();?>
  <div id="main-banner">
    <?php query_posts('posts_per_page=1&category_name=banner');
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="banner-holder">
  <div class="banner-bg" style="background-image:url(<?php the_post_thumbnail_url();?>);"> 
  </div><!--banner-bg-->
<div class="banner-content">
  <div class="container">
   <div class="row">
    <div class="col-sm-12">
      <div class="table-wrapper">
        <div class="col-7-content">
          <div class="banner-wrap">
            <div class="banner-text text-center">
             <h1><?php the_title();?><span class="color1"><?php echo get_field('banner_subtitle'); ?>
</span></h1>
              <?php the_content();?>
                       
                        <a href="<?php the_permalink();?>"><button class="btn-read"><?php echo get_field('btn'); ?></button></a>
</div><!--banner-text-->
</div><!--banner-wrap-->
</div><!--col-7-content-->
</div><!--table-wrapper-->
</div><!--col-sm-12-->
</div><!--row-->
</div><!--container-->
</div><!--banner-content-->
</div><!--banner-holder-->
<?php endwhile; endif; wp_reset_query(); ?>
</div><!--main-banner-->





    <div id="help">
      <div class="container">
        <div class="row">
          <div class="help-content">
            <h3>How can we help you?</h3>
            <div class='select-dtp'>
      <p class='input-dtp'>How Do I stay Secure?</p>
      <input type='hidden' name='some_name_to_form' />
      <div class='hidden-dtp'>
        <p value='id_1' >option 1</p>
        <p value='id_2' >option 2</p>
        <p value='id_3' >option 3</p>
      </div><!-- hidden -->
    </div><!-- select -->
          </div><!-- help-content -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- help -->

    <div id="services">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
          <div class="service-heading text-center">
            <h3>Services</h3>
          </div>
          <div class="services-wrap">

 <?php
            $cnt=0;
            query_posts('posts_per_page=4&category_name=our-services');                      
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $cnt ++;
            $num_of_posts = $wp_query->post_count;
            global $post;
            $slug = $post->post_name;
            ?> 
          <?php if ($cnt%2==1) { ?>
            <div class="col-sm-2"> 
          <?php }?>
              <div class="tablinks" onmouseover="openCity(event, '<?php echo  $slug;?>')" >
                <div class="services services-1" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
                <div class="services-content text-center">
                  <h3><?php the_title();?></h3>
                  <button class="read-more">Read More</button>
                </div>
              </div>  
<?php if ($cnt%2==0||$cnt==$num_of_posts) { ?> 
            </div>
             <?php }?> 
            <?php
            endwhile;
            endif; 
            wp_reset_query();                 
            ?>  
            <div class="col-sm-4">
 <?php
            $cnt=0;
            query_posts('posts_per_page=-1&category_name=our-services');                      
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $cnt ++; 
            global $post;
            $slug = $post->post_name;
            ?> 
              <div class="tabcontent" id="<?php echo  $slug;?>" <?php if ($cnt == 1){echo 'style="display: block;"';}?>>
                <div class="services-display">
                  <div class="services-content text-center">
                    <h3><?php the_title();?></h3>
                   <?php the_excerpt();?>
                  </div><!-- services-content -->
                </div><!-- services-display -->
              </div><!-- tabcontent -->
                <?php
            endwhile;
            endif; 
            wp_reset_query();                 
            ?>  
            </div>
            <?php
            $cnt=0;
            query_posts('posts_per_page=4&category_name=our-services&offset=4');                      
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $cnt ++;
            $num_of_posts = $wp_query->post_count;
            global $post;
            $slug = $post->post_name;
            ?> 
          <?php if ($cnt%2==1) { ?>
            <div class="col-sm-2"> 
          <?php }?>
              <div class="tablinks" onmouseover="openCity(event, '<?php echo  $slug;?>')" >
                <div class="services" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
                <div class="services-content text-center">
                  <h3><?php the_title();?></h3>
                  <button class="read-more">Read More</button>
                </div>
              </div>  
<?php if ($cnt%2==0||$cnt==$num_of_posts) { ?> 
            </div>
             <?php }?> 
            <?php
            endwhile;
            endif; 
            wp_reset_query();                 
            ?>  
            
          </div>  <!-- services-wrap --> 
          </div><!--col-sm-12-->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- services -->

   

    <div id="who-we-are">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
              <?php
                query_posts('post_type=page&tag=who-we-are');
                if(have_posts()) : while(have_posts()) : the_post();
                ?> 
            <div class="about-us-content">
              <h2><?php the_title();?></h2>
              <?php the_content();?>
            </div><!-- about us content -->
            <?php endwhile; endif; wp_reset_query(); ?>
          </div><!-- col sm 12 -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- who we are -->

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
                  <a href="#" class="play-btn"></a>
               
                </div><!-- left video -->
              </div><!-- video-content -->
               <?php endwhile; endif; wp_reset_query(); ?>
            </div><!-- video table wrap -->
          </div><!-- col sm 12 -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- video section -->


    <div id="testimonials-section">
      <div class="container container-md">
        <div class="row">
          <div class="col-sm-12">
            <div class="testimonials-content">
                <div id="carousel" class="carousel testimonials-carousel" data-ride="carousel">
                  <ol class="carousel-indicators cara-indi">
                     <?php
                     $cnt=0;
                    query_posts('posts_per_page=9&post_type=testimonials');      
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                   
                      ?> 
                    
                    <li data-target="#carousel" data-slide-to="<?php echo $cnt ?>" class="<?php echo $cnt==0?'active':''; ?>">
                    </li>
                       <?php
                        $cnt ++;
                    endwhile;
                    endif;
                    //Reset Query
                    wp_reset_query();                 
                    ?>
                    </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner text-center">
                    
                    <?php
                     $cnt=0;
                    query_posts('posts_per_page=9&post_type=testimonials');      
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                     $cnt ++;
                      ?>    
                    <div class="item <?php echo $cnt == 1?'active':''; ?>">
                        <div class="testimonials-wrap blog-bg-1">
                          <div class="testimonials-text animated">
                            <h2><?php the_title(); ?></h2>
                            <img class="star" src="<?php bloginfo('template_url'); ?> /images/star.png" alt="star">
                            <?php the_content(); ?>
                            <div class="it-provider">
                              <h5><?php echo "<span>&mdash;</span>";?>&nbsp;<?php echo get_field('client_name'); ?><span class="blue">&nbsp;<?php the_time( 'F j, Y' ); ?></span></h5>
                            </div><!-- it-provider -->
                          </div><!--technology-text-->
                        </div><!--technology-wrap-->
                      </div><!--item-->
                                                                    
                    <?php
                    endwhile;
                    endif;
                    //Reset Query
                    wp_reset_query();                 
                    ?>
                  </div><!--carousel-inner-->
                  <a class="left carousel-control left-2" href="#carousel" role="button" data-slide="prev"></a>
                   <a class="right carousel-control right-2" href="#carousel" role="button" data-slide="next"></a>
                </div><!--carousel-->
            </div><!--testimonials-content-->
          </div><!--col-sm-12-->
        </div><!--row-->
      </div><!--container-->
    </div><!--testimonials-section-->

    <div id="blog-section">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12">
                <div class="heading-text">
                   <h2>Stay Up-to-date With The Latest Technology News, Tips and Tricks<span class="block-text">and How-To Articles From Your Denver IT Services Company.</span></h2>
                </div><!-- heading-text -->
             </div><!-- col-sm-12 -->
          </div><!-- row -->
          <div class="row">
             <?php
            $cnt=0;
            query_posts('posts_per_page=4&category_name=blog');                      
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $cnt ++;
            $num_of_posts = $wp_query->post_count;
            ?> 
             <?php if($cnt==1|$cnt==2|$cnt==3) {?>
            <?php if($cnt==1) {?>
             <div class="col-sm-8 col-md-8">
              <?php }?>
                    <?php if($cnt==1) {?>
                <div class="blog-content content-1">
                  <div class="image-blog" style="background-image: url('<?php if(has_post_thumbnail()) : ?><?php the_post_thumbnail_url(); ?><?php else: ?><?php echo getFirstImage(); ?><?php endif; ?>');">
                  </div><!-- image-blog -->
                   <div class="text-wrap">
                      <h3><?php the_title();?></h3>                      
                      <p>
                         <?php the_content();?>
                      </p>
                      <a href="<?php the_permalink();?>" class="read-btn">Read More</a>
                   </div><!-- text-wrap -->
                </div><!-- blog-content --> 
                 <?php }?> 
            <?php if($cnt==2|$cnt==3) {?>
            <?php if($cnt==2) {?>
                <div class="row">
                  <?php }?>
                   <div class="col-sm-6 col-md-6">
                      <div class="blog-content content-<?php if($cnt==2) {?>3<?php }?><?php if($cnt==3) {?>4<?php }?>">
                          <div class="image-blog" style="background-image: url('<?php if(has_post_thumbnail()) : ?><?php the_post_thumbnail_url(); ?><?php else: ?><?php echo getFirstImage(); ?><?php endif; ?>');">
                         </div>
                         <!-- image-blog -->
                         <div class="text-wrap <?php if($cnt==2) {?>textWrap2<?php }?><?php if($cnt==3) {?>textWrap3<?php }?>">
                          <h3><?php the_title();?></h3>
                            <?php 
                              if($cnt==2) { ?>
                                <p><?php echo wp_trim_words(get_the_content(), $num_words = 35, $more = '[…]' ); ?></p>
                             <?php } ?>
                            
                               <a href="<?php the_permalink();?>" class="read-btn">Read More</a>
                           
                         </div>
                         <!-- text-wrap -->
                      </div>
                      <!-- info-wrap -->   
                   </div><!-- c0l-sm-6 -->
                      <?php if($cnt==3) {?> 
                </div><!-- row -->
             </div> <!-- col-sm-8 -->
             <?php } }?> 
              <?php } elseif($cnt==4) {?>
             <div class="col-sm-4 col-md-4">
                <div class="blog-content content-2">
                    <div class="image-blog" style="background-image: url('<?php if(has_post_thumbnail()) : ?><?php the_post_thumbnail_url(); ?><?php else: ?><?php echo getFirstImage(); ?><?php endif; ?>');">
                   </div>
                   <!-- image-blog -->
                   <div class="text-wrap textWrap4">
                      <h3><?php the_title();?></h3>
                      <p>
                       <?php the_content();?>
                      </p>
                      <a href="<?php the_permalink();?>" class="read-btn">Read More</a>
                   </div>
                   <!-- text-wrap -->
                </div>
                <!-- medical-info --> 
             </div><!-- col-sm-4 -->
            <?php }?>
              <?php
            endwhile;
            endif;
            //Reset Query
            wp_reset_query();                 
            ?> 
          </div><!-- row -->
       </div><!-- container-fluid -->
    </div><!-- blog-section -->
<?php get_footer();?>
    

