<?php get_header();?>
  <div id="inner-section">
    <?php $inner_banner_image = get_field('inner_banner_image'); 
    if (!empty($inner_banner_image)) { ?>
    <div class="inner-img" style="background-image:url('<?php echo $inner_banner_image; ?>');">
      <?php } else { ?>
    <div class="inner-img">
      <?php }?>
    </div>
    <div class="container container-md">
      <div class="row">
        <div class="col-sm-12">
          <div class="inner-wrap">
                    <h1><?php if(is_page()) { ?> 
                    <?php the_title(); ?> 
                    <?php } elseif (is_single()) { ?> 
                    <?php the_title();?>
                    <?php } elseif (is_archive()){?>
                    <?php echo post_type_archive_title( '', false ); ?>
                    <?php } elseif (is_404()){?>
                    Oops! Page Not Found 
                    <?php } elseif (is_search()){?>
                    Search results for: <?php the_search_query(); ?>
                    <?php }?></h1>
                    <?php 
                    if ( has_excerpt() ) {
                    the_excerpt(); 
                    }
                    ?>     
          </div><!-- inner-wrap -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    </div><!-- container -->     
  </div><!-- inner-section-->


