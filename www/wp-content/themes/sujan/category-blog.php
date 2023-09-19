<?php get_header();
$tags = get_tags();
?>
<section class="blog-section">
  <div class="container">
    <h2 class="section-title">Latest Blog Posts</h2>
    <div class="row masonry-grid" id="blog-container">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3, // Number of posts to display (set to -1 to retrieve all)
        'orderby' => 'date',    // Order posts by date
        'order' => 'DESC',      // Sort posts in descending order (newest first),
        'tax_query' => array(
          array(
            'taxonomy' => 'post_tag',
            'field' => 'id',
            'operator' => 'EXISTS',
            'orderby' => 'date',
          ),
        ),
      );
      $tag_query = new WP_Query($args);
      if ($tag_query->have_posts()) {
        while ($tag_query->have_posts()) {
          $tag_query->the_post();
          $max_words = 30;
      ?>
          <div class="col-md-4">
            <div class="blog-entry">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('medium', array('class' => 'blog-image'));
              }
              ?>
              <span class="tag-blog">
                <?php
                // Get the post's tags
                $post_tags = get_the_tags();

                if ($post_tags) {
                  foreach ($post_tags as $tag) {
                    echo '<a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a>';
                  }
                }
                ?>
              </span>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php
              echo wpautop(wp_trim_words(get_the_content(), $max_words, '...'));
              ?>
              <div class="blog-meta">
                <span class="blog-date"><?php the_date('F j, Y'); ?></span>
                <span class="f-right blog-more-btn">
                  <a href="<?php the_permalink(); ?>"><i class="fas fa-long-arrow-alt-right"></i> <span class="blog-more"> More</span></a>
                </span>
              </div>
            </div>
          </div>
      <?php  }
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
 
    <div class="text-center" id="loadingImage" style="display: none;">
      <img width="70" height="70" src="<?php echo site_url(); ?>/wp-content/themes/sujan/images/loader.png" alt="Loader Image">
    </div>
    <a href="#" id="loadMoreButton">Load More</a>
 
</section>



<?php get_footer(); ?>