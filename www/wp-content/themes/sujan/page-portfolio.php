<?php get_header();
$m_title = get_field('m_title');
$span_title = get_field('span_title');
$abt_info_content = get_field('abt_info_content');
$abt_left_image = get_field('about_left_image');
$bottom_title = get_field('bottom_title');
$last_title = get_field('last_title');
$myFieldValue = get_field('truefalse');
$parent_category_id = 13; // Replace with the actual parent category ID 
$subcategories = get_categories(array(
  'parent'       => $parent_category_id,
  'taxonomy'     => 'category', // Replace with your custom taxonomy if needed
  'order'           => 'DESC',
  'hide_empty'   => false, // Include even empty subcategories
));
?>

<div class="container-fluid bg-grey" id="about">
  <div class="container">
    <div class="heading">
      <?php echo '<h5>' . $m_title . '</h5>'; ?>
      <h2><span class="heading-bordker"></span> <?php echo $span_title; ?><span class="heading-border"></span></h2>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-5 col-12">
        <?php if ($myFieldValue) { ?>
          <div class="about-img"><img src="<?php echo $abt_left_image; ?>">
          <?php } else { ?>
            NO Image
          <?php } ?>

          </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12">
        <div class="about-info">
          <?php echo $abt_info_content;
          if (have_rows('about_tool_content_Repeater')) { ?>
            <div class="about-tool">
              <?php while (have_rows('about_tool_content_Repeater')) {
                the_row();
                $span_title_r = get_sub_field('span_title_r');
                echo '<span>' . $span_title_r . '</span>';
              } ?>
            </div>
          <?php }
          echo '<h2>' . $bottom_title . '</h2>';
          if (have_rows('about_tool_content_repeater_2')) { ?>
            <div class="about-tool">
              <?php while (have_rows('about_tool_content_repeater_2')) {
                the_row();
                $span_title_2 = get_sub_field('span_title_2');
                echo '<span>' .  $span_title_2 . '</span>';
              } ?>
            </div>
          <?php }
          echo '<h2>' . $last_title . '</h2>';
          if (have_rows('work_process_repeater')) { ?>
            <div class="row about-work">
              <?php while (have_rows('work_process_repeater')) {
                the_row();
                $title = get_sub_field('title');
                $number = get_sub_field('number');
              ?>
                <div class="col-md-3 col-12 mt-2"> <span><?php echo $number; ?></span>
                  <?php echo '<h4>' . $title . '</h4>' ?>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
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
        <div class="card">
          <div class="card-header">
            <div class="pull-left">
              <h4 class="mt-2">Skills</h4>
              <span class="line"></span>
            </div>
          </div>
          <div class="card-body pb-2">
            <ul class="animated-list">
              <li>Basic understanding of the WordPress dashboard and interface.</li>
              <li>Ability to install and activate themes and plugins.</li>
              <li>Creating and publishing posts and pages.</li>
              <li>Uploading media (images, videos, etc.).</li>
              <li>Basic customization of website appearance.</li>
              <li>Familiarity with HTML, CSS, and possibly PHP for customizing themes and templates.</li>
              <li>Knowledge of more advanced plugins and their configuration.</li>
              <li>Understanding and usage of WordPress categories, tags, and taxonomies.</li>
              <li>Basic Search Engine Optimization (SEO) for improving website visibility.</li>
              <li>Experience with managing user roles and permissions.</li>
              <li>Ability to create custom WordPress themes and templates.</li>
              <li>Understanding of the WordPress database structure and management.</li>
            </ul>
          </div>
        </div>
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
  <div class="container">
    <div class="heading">
      <div class="section_heading text-center">
        <h5>blog</h5>
        <h2><span class="heading-border"></span> The Latest BLog<span class="heading-border"></span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <br /> ultrices sapien vel quam luctus pulvinar.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="blog_slider_area owl-carousel">
          <?php
          // The Query
          $args = array(
            'post_type' => 'post',       // Retrieve posts
            'posts_per_page' => -1,       // Number of posts per page
            'orderby' => 'date',         // Order posts by date
            'order' => 'DESC',           // Display posts in descending order
          );

          $blog = new WP_Query($args);
          if ($blog->have_posts()) {
            while ($blog->have_posts()) {
              $blog->the_post();
              $formattedDate = date("F j, Y");
              $image = get_the_post_thumbnail_url($blog->ID, 'full');
          ?>
              <div class="box-area">
                <div class="single-blog">
                  <div class="post-img">
                    <img src="<?php echo $image; ?>" alt="" />
                  </div>
                  <div class="single_blog">
                    <a href="#">
                      <h3 class="post-title"><?php the_title(); ?></h3>
                    </a>
                    <ul class="icon-area">
                      <li><i class="fa fa-users"></i><?php the_author(); ?></li>
                      <li><i class="fa fa-clock-o"></i><?php echo $formattedDate; ?></li>
                    </ul>
                    <p class="blog-text">
                      <?php echo the_excerpt(); ?>
                    </p>
                    <div class="btn-area">
                      <a href="#" class="btn btn-default main_btn">read more</a>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main text-center">
  <div class="container">
    <div class="heading">
      <!-- Heading content here -->
    </div>
    <ul class="list-unstyled row">
      <!-- Category filters here -->
    </ul>
    <div class="container-fluid">
      <?php
      $args = array(
        'post_type' => 'portfolio', // Replace 'portfolio' with your custom post type name
        'posts_per_page' => -1,
      );

      $portfolio_query = new WP_Query( $args );

      if ( $portfolio_query->have_posts() ) :
        while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
          $categories = get_the_terms( get_the_ID(), 'category' ); // Replace 'category' with your custom taxonomy name
          if ( $categories && ! is_wp_error( $categories ) ) {
            $category_classes = wp_list_pluck( $categories, 'slug' );
            $category_classes = implode( ' ', $category_classes );
          } else {
            $category_classes = '';
          }
          ?>
          <div class="col-md-3 images <?php echo esc_attr( $category_classes ); ?>">
            <div class="portfolio-info">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <?php
              if ( $categories ) {
                foreach ( $categories as $category ) {
                  echo '<span>' . $category->name . '</span>';
                }
              }
              ?>
            </div>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo 'No portfolio items found.';
      endif;
      ?>
    </div>
  </div>
</section>

<?php /*<section class="main text-center">
  <div class="container">
    <div class="heading">
      <h5>PORTFOLIO</h5>
      <h2><span class="heading-border"></span> MY PORTFOLIO<span class="heading-border"></span></h2>
      <p>This is a HTML CSS &amp; JavaScript prtfolio filter, You can call this sorting images by category order. The layout design is based on Bootstrap. This Example &amp; Source Code By <a href="https://webdevtrick.com">Webdevtrick</a></p>
    </div>
    <ul class="list-unstyled row">
      <li class="col-md active" data-class="all">ALL</li>
      <?php if ($subcategories) {
        foreach ($subcategories as $subcategory) {
          echo '<li class="col-md">' . esc_html($subcategory->name) . '</li>';
        }
      }
      ?>
    </ul>
    <div class="container-fluid ">
      <?php
      $args = array(
        'taxonomy' => 'category',
        'child_of' => $parent_category_id,
        'hide_empty' => false, // Show even if subcategories are empty
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $title = get_the_title();
          $post_id = get_the_ID(); // Replace with the actual post ID if needed
          $word_limit = 50; // Set the desired word limit 
          $post_content = get_the_content();
          $trimmed_content = wp_trim_words($post_content, $word_limit)
      ?>
          <div class="col-md-3 images" data-class="<?php echo esc_html($query->name); ?>">
            <div class="portfolio-info">
              <h3><?php echo  $title; ?></h3>
              <?php echo $trimmed_content; ?>
            </div>
          </div>
      <?php
        }
      }
      wp_reset_query(); ?>
    </div>
  </div>
</section> */?>

<section class="section bg-dark py-5">
  <div class="container text-center">
    <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
    <button class="btn bg-primary w-lg">Hire me</button>
  </div>
</section>

<div class="container-fluid main-section" id="service">
  <div class="container">
    <div class="heading">
      <h5>SERVICES</h5>
      <h2><span class="heading-border"></span> MY SERVICES<span class="heading-border"></span></h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="service">
          <div class="service-hex"><i class="fa fa-briefcase"></i></div>
          <div class="service-inner">
            <h3>Unique design</h3>
            <p>Lorem Ipsum is simpely dummy texxt of the prisnting and typesetting industry. Lorem Ipsum has ben thes industry.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="service">
          <div class="service-hex"><i class="fa fa-cube"></i></div>
          <div class="service-inner">
            <h3>Different Layout</h3>
            <p>Lorem Ipssum is simply dummy text of the printng and typeseting indusrtry. Liorem Iipsum has ben thes induestry.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="service">
          <div class="service-hex"><i class="fa fa-database"></i></div>
          <div class="service-inner">
            <h3>Make it Database</h3>
            <p>Lorim Ipsam is simpxy dumxy taxt of the prxnting and typssetting industery. Loram Ipsom hos been the indusetry.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="service">
          <div class="service-hex"><i class="fa fa-laptop"></i></div>
          <div class="service-inner">
            <h3>Responsiveness</h3>
            <p>Lorxm Ipsvm is simpiy dvmmy taxt of the pronting and typetting indusstry. Lorem Ipsum has been the indusstry.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="service">
          <div class="service-hex"><i class="fa fa-bug"></i></div>
          <div class="service-inner">
            <h3>Testing for Perfection</h3>
            <p>Loram Ipsnm ns simpny duxmmy text of the printding and typstting industrys. Lorem Ipsum has been the idndustry.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="service">
          <div class="service-hex"><i class="fa fa-file-code-o"></i></div>
          <div class="service-inner">
            <h3>Make it Simple</h3>
            <p>Lxrem Ipsum is sismply dummy text of the prindting and typeseltting induistry. Lorem Ipsum has been the industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer(); ?>