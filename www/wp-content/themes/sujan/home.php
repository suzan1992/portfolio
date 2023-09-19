<?php get_header();
$page_id = 147;
$page_query = new WP_Query(array(
  'page_id' => $page_id,
  'post_type' => 'page',
));
?>

<div class="container-fluid bg-grey" id="about">
  <div class="heading">
    <h5>ABOUT</h5>
    <h2><span class="heading-border"></span> ABOUT US<span class="heading-border"></span></h2>
  </div>
  <div class="row">
    <?php
    if ($page_query->have_posts()) {
      while ($page_query->have_posts()) {
        $page_query->the_post();
        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
        $image_alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt'); ?>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="about-image animate">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
          </div>
        </div>
      <?php
      } ?>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="about-text animate">
          <?php echo wpautop(get_the_content()); ?>
        </div>
      </div>
    <?php
    }
    wp_reset_postdata(); // Restore the global post data
    ?>
  </div>
</div>



<?php /*<div id="project" class="project-area pt-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="heading">
          <h5>MY Projects</h5>
          <h2><span class="heading-border"></span> Project <span class="heading-border"></span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-menu mt-55 mb-40 text-center">
        <button class="active" data-filter="*">all</button>
        <?php
        $custom_post_type = 'portfolio';
        $taxonomy_name = 'portfolio-category';
        $categories = get_terms(array(
          'taxonomy' => $taxonomy_name,
          'hide_empty' => false,
        ));
        foreach ($categories as $category) {
          echo '<button data-filter=".' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</button>';
        }
        ?>
      </div>

      <div class="grid" id="portfolio-grid">
        <?php
        $args = array(
          'post_type' => $custom_post_type,
          'posts_per_page' => -1, // Display all posts
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();

            // Get the post's categories
            $categories = get_the_terms(get_the_ID(), $taxonomy_name);

            // Initialize an empty class list for categories
            $category_classes = array();

            if (!empty($categories)) {
              foreach ($categories as $category) {
                $category_classes[] = esc_attr($category->slug);
              }
            }

            // Create a space-separated list of category class names
            $category_class = implode(' ', $category_classes);

            // Get the post thumbnail and trimmed content
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $trimmed_content = wp_trim_words(get_the_content(), 20);
        ?>
            <!-- Add your portfolio items here -->
            <div class="grid-item <?php echo esc_attr($category_class); ?>">
              <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
              <div class="portfolio-hover">
                <a class="img-popup" href="<?php echo esc_url($thumbnail_url); ?>">
                  <span class="icon-focus"></span>
                </a>
              </div>
              <h3><?php the_title(); ?></h3>
              <?php echo wpautop($trimmed_content); ?>
            </div>
        <?php
          endwhile;
          wp_reset_postdata(); // Reset the query
        else :
          echo 'No portfolio items found.';
        endif;
        ?>
      </div>
    </div>
  </div>
</div> */ ?>

<section class="section" id="resume">
  <div class="container">
    <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-header">
            <div class="mt-2">
              <h4>Work Experience</h4>
              <span class="line"></span>
            </div>
          </div>
          <div class="card-body">
            <h6 class="title text-danger">2016 - 2018</h6>
            <p class="expert-text">WordPress Developer</p>
            <a href="https://chuchuro.com/" target="_blank">
              <p class="company-text">Chuchuro Firm</p>
            </a>
            <hr>
            <h6 class="title text-danger">2019 - 2021</h6>
            <p class="expert-text">WordPress Developer</p>
            <a href="https://chuchuro.com/" target="_blank">
              <p class="company-text">Chuchuro Firm</p>
            </a>
            <hr>
            <h6 class="title text-danger">2021 - 2022</h6>
            <p class="expert-text">WordPress Developer</p>
            <a href="https://www.smartsites.com/" target="_blank">
              <p class="company-text">SmartSites Nepal</p>
            </a>
            <hr>
            <h6 class="title text-danger">2023 - Present</h6>
            <p class="expert-text">Mern Stack Developer</p>
            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-header">
            <div class="mt-2">
              <h4>Education</h4>
              <span class="line"></span>
            </div>
          </div>
          <div class="card-body">
            <h6 class="title text-danger">2021 - Present</h6>
            <p class="std-title">Bachelor in Computer Application (BCA)</p>
            <p>International Center Of Academic (ICA)</p>
            <hr>
            <h6 class="title text-danger">2010 - 2012</h6>
            <p class="std-title">Higher Secondary Education Board (HSEB)</p>
            <p>NIC Higher Secondary School (Necessitatibus) </p>
            <hr>
            <h6 class="title text-danger">1997 - 2010</h6>
            <p class="std-title">School Leaving Certificate (SLC)</p>
            <p>Asphodel Public School (APS)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <?php
        $page_id = 275;
        $page_query = new WP_Query(array(
          'page_id' => $page_id,
          'post_type' => 'page',
        ));

        if ($page_query->have_posts()) {
          while ($page_query->have_posts()) {
            $page_query->the_post();
        ?>
            <div class="card">
              <div class="card-header">
                <div class="pull-left">
                  <h4 class="mt-2"><?php echo get_the_title(); ?></h4>
                  <span class="line"></span>
                </div>
              </div>
              <div class="card-body pb-2">
                <ul class="animated-list">
                  <?php echo get_the_content(); ?>
                </ul>
              </div>
            </div>
        <?php
          }
          wp_reset_postdata(); // Restore the global post data
        }
        ?>
        <div class="card">
          <div class="card-header">
            <div class="pull-left">
              <h4 class="mt-2">Languages</h4>
              <div class="skills">
                <div class="skill">
                  <span class="skill-name">Nepali</span>
                  <div class="progress-bar">
                    <div class="progress" data-progress="80"></div>
                  </div>
                </div>
                <div class="skill">
                  <span class="skill-name">English</span>
                  <div class="progress-bar">
                    <div class="progress" data-progress="60"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php /*<section class="portfolio">
  <div class="heading">
    <h5>MY Projects</h5>
    <h2><span class="heading-border"></span> Project <span class="heading-border"></span></h2>
  </div>
  <div class="portfolio">
    <?php
    $categories = get_terms('portfolio-category');
    if ($categories && !is_wp_error($categories)) {
      echo '<div class="tab-bar">';
      echo '<button class="tab-btn active" data-category="All">All</button>';
      foreach ($categories as $category) {
        echo '<button class="tab-btn" data-category="' . $category->slug . '">' . $category->name . '</button>';
      }
      echo '</div>';
    }
    ?>
    <div class="portfolio-items row">
      <?php
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'orderby' => 'DESC',
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $categories = get_the_terms(get_the_ID(), 'portfolio-category');
          $category_slugs = array_map(function ($cat) {
            return $cat->slug;
          }, $categories);
          $category_classes = implode(' ', $category_slugs);
          $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
          $trimmed_content = wp_trim_words(get_the_content(), 20);
      ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="item <?php echo $category_classes; ?> fade-in">
              <img src="<?php echo  esc_url($thumbnail_url); ?>" alt="<?php echo get_the_title(); ?>">
              <h3><?php echo get_the_title(); ?></h3>
              <?php echo wpautop($trimmed_content); ?>
            </div>
          </div>
      <?php
        }
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</section>*/ ?>


<section class="portfolio">
  <div class="heading">
    <h5>MY Projects</h5>
    <h2><span class="heading-border"></span> Project <span class="heading-border"></span></h2>
  </div>
  <div class="portfolio">
    <?php
    $categories = get_terms('portfolio-category');
    if ($categories && !is_wp_error($categories)) {
      echo '<div class="tab-bar">';
      echo '<button class="tab-btn active" data-category="All">All</button>';
      foreach ($categories as $category) {
        echo '<button class="tab-btn" data-category="' . $category->slug . '">' . $category->name . '</button>';
      }
      echo '</div>';
    }

    // Check if there are portfolio items
    $portfolio_items = get_posts(array(
      'post_type' => 'portfolio',
      'posts_per_page' => -1,
      'orderby' => 'DESC',
    ));

    if (!empty($portfolio_items)) {
      echo '<div class="portfolio-items row">';
      foreach ($portfolio_items as $portfolio_item) {
        $categories = get_the_terms($portfolio_item->ID, 'portfolio-category');
        $category_slugs = array_map(function ($cat) {
          return $cat->slug;
        }, $categories);

        // Check if this portfolio item belongs to any category
        if (!empty($category_slugs)) {
          $category_classes = implode(' ', $category_slugs);
          $thumbnail_url = get_the_post_thumbnail_url($portfolio_item->ID, 'medium');
          $trimmed_content = wp_trim_words($portfolio_item->post_content, 20);
    ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="item <?php echo $category_classes; ?> fade-in">
              <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($portfolio_item->post_title); ?>">
              <h3><?php echo esc_html($portfolio_item->post_title); ?></h3>
              <?php echo wpautop($trimmed_content); ?>
            </div>
          </div>
    <?php
        }
      }
      echo '</div>'; // Close portfolio-items div
    } else {
      echo '<p>No portfolio items found.</p>';
    }
    ?>
  </div>
</section>


<section class="section bg-dark text-center">
  <div class="stats-container">
    <div class="stat-card">
      <i class="fas fa-clock fa-3x animated infinite bounce"></i>
      <h3>Hours</h3>
      <p id="hours">1000+</p>
    </div>
    <div class="stat-card">
      <i class="fas fa-smile fa-3x animated infinite pulse"></i>
      <h3>Happy Clients</h3>
      <p id="happyClients">500+</p>
    </div>
    <div class="stat-card">
      <i class="fas fa-project-diagram fa-3x animated infinite rubberBand"></i>
      <h3>Projects Finished</h3>
      <p id="projectsFinished">200+</p>
    </div>
  </div>
</section>

<section id="blog" class="section_padding">
  <div class="latest-blog-area pt-80 pb-120 gray-bg">
    <div class="section_heading text-center">
      <h5>blog</h5>
      <h2><span class="heading-border"></span> The Latest BLog<span class="heading-border"></span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <br /> ultrices sapien vel quam luctus pulvinar.</p>
    </div>
    <div class="container">
      <div class="custom-row">
        <div class="blog-active dot-style">
          <?php
          // Construct the WP_Query arguments to include posts with tags
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1, // Number of posts to display (set to -1 to retrieve all)
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
              <div class="col-xl-12 col-lg-12">
                <div class="blog-wrapper">
                  <div class="blog-inner">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
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
                      <span class="f-left">
                        <?php echo get_the_date(); ?>
                      </span>
                      <span class="f-right blog-more-btn">
                        <a href="<?php the_permalink(); ?>"><i class="fas fa-long-arrow-alt-right"></i> <span class="blog-more"> More</span></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
            wp_reset_postdata(); // Reset the post data
          }
          ?>
        </div>
      </div>
    </div>
</section>

<?php
$category_slug = 'features';
$category = get_category_by_slug($category_slug);
if ($category) {
  $category_id = $category->term_id;
  $args = array(
    'category__in' => array($category_id),
    'post_type' => 'post',
    'posts_per_page' => -1,
    'order'   => 'ASC',
  );
  $query = new WP_Query($args);
?>
  <section id="features" class="section-padding">
    <div class="container">
      <div class="heading">
        <h5><?php echo $category->name; ?></h5>
        <h2><span class="heading-border"></span> Features <span class="heading-border"></span></h2>
      </div>
      <div class="row">
        <?php
        $counter = 0;
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $post_content = get_the_content();
            $trimmed_content = wp_trim_words($post_content, 20);
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $permalink = get_the_permalink();
            if ($counter % 2 == 0) {

              $colClass = '';
            } else {
              $colClass = 'reverse';
            }
        ?>
            <div class="col-12 feature-item <?php echo $colClass; ?>">
              <div class="row">
                <div class="col-md-6">
                  <header class="block-title">
                    <div class="block-content">
                      <h2 class="py-1"><?php echo $title; ?></h2>
                      <?php echo wpautop($trimmed_content); ?>
                      <a href="<?php echo $permalink; ?>" class="btn btn-primary">Learn More</a>
                    </div>
                  </header>
                </div>
                <div class="col-md-6">
                  <img width="500" height="400" src="<?php echo $thumbnail_url; ?>" alt="Approach" loading="lazy">
                </div>
              </div>
            </div>
        <?php
            $counter++;
          }
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
<?php } ?>

<section class="Teams-category">
  <div class="container">
    <div class="heading">
      <?php
      // Replace 'portfolio_items' with your actual CPT slug.
      $cpt_slug = 'teams';
      $cpt_object = get_post_type_object($cpt_slug);

      if ($cpt_object) {
        $cpt_title = $cpt_object->labels->name; ?>
        <h5><?php echo  $cpt_title; ?></h5>
      <?php }
      ?>
      <h2><span class="heading-border"></span> My Teams<span class="heading-border"></span></h2>
    </div>
    <div class="row">
      <div class="team-slider">
        <?php
        $team_query = new WP_Query(array(
          'post_type' => 'teams', // Replace with your custom post type name
          'posts_per_page' => -1, // To fetch all team members
          'orberby' => 'date',
        ));

        if ($team_query->have_posts()) {
          while ($team_query->have_posts()) {
            $team_query->the_post();
            $position = get_field('postion');
        ?>
            <div class="team-member">
              <div class="team-image">
                <?php
                // Display the team member's featured image
                if (has_post_thumbnail()) {
                  the_post_thumbnail('thumbnail');
                }
                ?>
              </div>
              <div class="team-text">
                <h3><?php the_title(); ?></h3>
                <?php echo wpautop($position); ?>
                <div class="social-icons">
                  <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                  <!-- Add more social media icons as needed -->
                </div>
              </div>
            </div>
        <?php
          }
          wp_reset_postdata(); // Reset the query
        }
        ?>

      </div>
    </div>
  </div>
</section>


<div class="container-fluid main-section" id="service">
  <div class="container">
    <div class="heading">
      <h5><?php echo get_cat_name(25); ?></h5>
      <h2><span class="heading-border"></span> MY SERVICES<span class="heading-border"></span></h2>
    </div>
    <div class="row">
      <?php
      $category_slug = 'services';
      $args = array(
        'post_type' => 'post',
        'category_name' => $category_slug,
        'posts_per_page' => -1,
        'orderby' => 'date',
      );
      $query = new WP_Query($args); ?>
      <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $title = get_the_title();
          $trimmed_content = wp_trim_words(get_the_content(), 15);
          $icon = get_field('icon_text');
      ?>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="service fade-in">
              <div class="service-hex"><i class="fa <?php echo $icon; ?>"></i></div>
              <div class="service-inner">
                <?php echo '<h3>' . $title . '</h3>'; ?>
                <?php echo wpautop($trimmed_content); ?>
              </div>
            </div>
          </div>
      <?php }
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</div>


<?php /*<div id="dts-inner_content">
  <div class="container container-md">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="content-wrap">
          <div class="woocommerce columns-4">
            <div class="woocommerce-notices-wrapper"></div>
            <?php
            // WP_Query to retrieve products
            $args = array(
              'post_type' => 'product', // Adjust post type to your needs
              'posts_per_page' => -1,
              'orderby' => (isset($_GET['orderby']) && in_array($_GET['orderby'], array('price', 'date', 'name'))) ? $_GET['orderby'] : 'date', // Default to date sorting
              'order' => 'ASC', // You can change to DESC if needed
            );

            $products_query = new WP_Query($args);
            $product_count = $products_query->found_posts;

            // Sorting form
            ?>
            <p class="woocommerce-result-count">
              Showing all <?php echo $product_count; ?> results
            </p>
            <form class="woocommerce-ordering" method="get">
              <select name="orderby" class="orderby" aria-label="Shop order">
                <option value="default" <?php selected('default', $_GET['orderby']); ?>>Default sorting</option>
                <option value="price" <?php selected('price', $_GET['orderby']); ?>>Sort by price</option>
                <option value="date" <?php selected('date', $_GET['orderby']); ?>>Sort by date</option>
                <option value="name" <?php selected('name', $_GET['orderby']); ?>>Sort by name</option>
              </select>
              <input type="hidden" name="paged" value="1">
            </form>

            <ul class="products columns-4">
              <?php
              if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
                  global $product; // Access the current product object

                  // Retrieve product data
                  $product_id = get_the_ID();
                  $product_title = get_the_title();
                  $product_image_url = get_the_post_thumbnail_url($product_id, 'thumbnail'); // Get the featured image URL

                  // Get the product price
                  $product_price = $product->get_price_html();
              ?>
                  <li class="product type-product post-<?php echo $product_id; ?> status-publish instock product-cat-<?php echo $product->get_categories(); ?>">
                    <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                      <?php echo $product->is_on_sale() ? '<span class="onsale">Sale!</span>' : ''; ?>
                      <img src="<?php echo esc_url($product_image_url); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?php echo esc_attr($product_title); ?>" decoding="async">
                      <h2 class="woocommerce-loop-product__title"><?php echo esc_html($product_title); ?></h2>
                      <span class="price"><?php echo $product_price; ?></span>
                    </a>
                    <a href="?add-to-cart=<?php echo $product_id; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product_id; ?>" data-product_sku="" aria-label="<?php echo esc_attr($product_title); ?>" aria-describedby="" rel="nofollow">Add to cart</a>
                  </li>
              <?php
                endwhile;
              endif;
              wp_reset_postdata(); // Reset WP_Query
              ?>
            </ul>
          </div>
        </div><!-- content-wrap -->
      </div><!-- col-sm-12 -->
    </div><!-- row -->
  </div><!-- container -->
</div>*/ ?>



<div id="dts-inner_content">
  <div class="container container-md">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="content-wrap">
          <div class="woocommerce columns-4">
            <div class="woocommerce-notices-wrapper"></div>

            <?php
            // Sorting form
            function render_sorting_form($current_orderby)
            {
            ?>
              <p class="woocommerce-result-count">
                Showing all <?php echo wc_get_loop_prop('total'); ?> results
              </p>
              <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="Shop order">
                  <option value="default" <?php selected('default', $current_orderby); ?>>Default sorting</option>
                  <option value="price" <?php selected('price', $current_orderby); ?>>Sort by price</option>
                  <option value="date" <?php selected('date', $current_orderby); ?>>Sort by date</option>
                  <option value="name" <?php selected('name', $current_orderby); ?>>Sort by name</option>
                </select>
                <input type="hidden" name="paged" value="1">
              </form>
            <?php
            }

            // WP_Query to retrieve products
            $args = array(
              'post_type' => 'product', // Adjust post type to your needs
              'posts_per_page' => -1,
              'orderby' => (isset($_GET['orderby']) && in_array($_GET['orderby'], array('price', 'date', 'name'))) ? $_GET['orderby'] : 'date', // Default to date sorting
              'order' => 'ASC', // You can change to DESC if needed
            );

            $products_query = new WP_Query($args);

            // Render sorting form
            render_sorting_form($args['orderby']);
            ?>

            <ul class="products columns-4">
              <?php
              if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
                  global $product; // Access the current product object

                  // Render each product
                  render_product($product);
                endwhile;
              endif;
              wp_reset_postdata(); // Reset WP_Query
              ?>
            </ul>
          </div>
        </div><!-- content-wrap -->
      </div><!-- col-sm-12 -->
    </div><!-- row -->
  </div><!-- container -->
</div>

<?php
// Function to render each product
function render_product($product)
{
  $product_id = $product->get_id();
  $product_title = get_the_title($product_id);
  $product_image_url = get_the_post_thumbnail_url($product_id, 'thumbnail');
  $product_price = $product->get_price_html();
?>
  <li class="product type-product post-<?php echo $product_id; ?> status-publish instock product-cat-<?php echo $product->get_categories(); ?>">
    <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
      <?php echo $product->is_on_sale() ? '<span class="onsale">Sale!</span>' : ''; ?>
      <img src="<?php echo esc_url($product_image_url); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?php echo esc_attr($product_title); ?>" decoding="async">
      <h2 class="woocommerce-loop-product__title"><?php echo esc_html($product_title); ?></h2>
      <span class="price"><?php echo $product_price; ?></span>
    </a>
    <a href="?add-to-cart=<?php echo $product_id; ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product_id; ?>" data-product_sku="" aria-label="<?php echo esc_attr($product_title); ?>" aria-describedby="" rel="nofollow">Add to cart</a>
  </li>
<?php
}
?>


<?php
$args = array(
  'post_type' => 'faqs',
  'posts_per_page' => -1,
  'order' => 'ASC',
);
$faq_query = new WP_Query($args);
if ($faq_query->have_posts()) {
  $faq_count = $faq_query->post_count;
  $first_faq = true;
?>
  <section class="faq">
    <div class="heading">
      <h5>FAQs</h5>
      <h2><span class="heading-border"></span> Frequently Asked Questions <span class="heading-border"></span></h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="accordion">
            <?php
            while ($faq_query->have_posts()) {
              $faq_query->the_post();
              $trimmed_content = wp_trim_words(get_the_content(), 20);
            ?>
              <div class="accordion-item <?php echo $first_faq ? ' active' : ''; ?>">
                <button id="accordion-button-<?php the_ID(); ?>" aria-expanded="<?php echo $first_faq ? 'true' : 'false'; ?>">
                  <span class="accordion-title"><?php the_title(); ?></span>
                  <span class="icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content<?php echo $first_faq ? ' open' : ''; ?>">
                  <?php echo wpautop($trimmed_content); ?>
                </div>
              </div>
            <?php
              $first_faq = false;
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
wp_reset_postdata();
?>



<section class="testimonial text-center">
  <div class="heading white-heading">
    <h5>Testimonials</h5>
    <h2><span class="heading-border"></span>What Are People Saying About Us<span class="heading-border"></span></h2>
  </div>
  <div class="container">
    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
      <div class="carousel-inner" role="listbox">
        <?php
        $testimonial_query = new WP_Query(array(
          'post_type' => 'testimonials', // Your custom post type name
          'posts_per_page' => -1, // To fetch all testimonials, use -1
        ));

        if ($testimonial_query->have_posts()) :
          $i = 0;
          while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
            $client_name = get_field('client_name'); // Replace 'testimonial_title' with your ACF field name for the title
            $testimonial_content = get_field('testimonial_content'); // Replace 'testimonial_content' with your ACF field name for the content
            $client_image = get_the_post_thumbnail_url();
        ?>
            <div class="carousel-item <?php echo ($i === 0) ? 'active' : ''; ?>">
              <div class="testimonial4_slide">
                <img src="<?php echo esc_url($client_image); ?>" class="img-circle img-responsive" alt="<?php echo esc_attr($testimonial_title); ?>" />
                <?php echo wpautop($testimonial_content); ?>
                <h4><?php echo $client_name; ?></h4>
              </div>
            </div>
        <?php
            $i++;
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial4" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</section>









<section class="section bg-dark py-5">
  <div class="container text-center">
    <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
    <button class="btn bg-primary w-lg">Hire me</button>
  </div>
</section>
<?php get_footer(); ?>