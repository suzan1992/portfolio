   <?php get_header('inner'); ?> 
<div id="testimonial_page">
    <div class="container container_testimonial">
        <div class="row">
            <div class="col-sm-12 small_screen_center">
                <ul class="testimonial_wrap">
                    <?php          
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    ?>
                        <li>
                            <div class="testimonial_content testimonial_content1">
                                <div class="testimonial_image">
                                    <div class="img_wrap">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="testimonial_image" style="background-image: url('<?php if(has_post_thumbnail()) : the_post_thumbnail_url(); else: echo getFirstImage(); endif; ?>');">
                                            </div>
                                        </a>
                                    </div><!--img_wrap-->
                                </div><!--testimonial_image-->
                                <div class="testimonial_text">
                                    <blockquote>
                                        <strong><?php the_title();?></strong>
                                                <?php the_excerpt();?> 
                                        </blockquote>
                                    <div class="rating">
                                        <img src="<?php echo get_template_directory_uri();?>/images/star_img.png" alt="Star">
                                    </div><!--rating-->
                                        <div class="profile_info">
                                            <p><?php echo get_field('client_name'); ?><span><?php echo get_field('client_position'); ?></span><span><?php echo get_field('company'); ?></span></p>
                                        </div><!--profile_info-->
                                </div><!--testimonial_text-->
                            </div><!--testimonial_content-->
                        </li>
                    <?php endwhile; endif; wp_reset_query(); ?> 
                </ul><!--testimonial_wrap-->
            </div><!--col-sm-12-->
        </div><!--row-->
    </div><!--container-->
</div>
<?php get_footer(); ?>