<?php get_header();?>
  <div id="inner-section">
      <?php 
      $queried_object = get_queried_object();
      $taxonomy = $queried_object->taxonomy;
      $term_id = $queried_object->term_id;
      $inner_banner_image = get_field('inner_banner_image', $taxonomy . '_' . $term_id);
      if (!empty($inner_banner_image)) : ?>
        <div class="inner-img" style="background-image:url('<?php echo $inner_banner_image; ?>');">
         <?php else : ?>
        <div class="inner-img">
      <?php endif; ?>
      </div><!--inner-bg-->
    <div class="container container-md">
      <div class="row">
        <div class="col-sm-12">
          <div class="inner-wrap">
            <h1><?php echo single_cat_title("", false); ?></h1>
            <?php echo category_description();?> 
          </div><!-- inner-wrap -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    </div><!-- container -->     
  </div><!-- inner-section-->
