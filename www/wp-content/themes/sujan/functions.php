<?php

/********register-menu*********/
register_nav_menu('header-menu', __('Header Menu'));
add_theme_support('post-thumbnails');

function register_custom_menu()
{
	register_nav_menu('primary-menu', __('Primary Menu', 'Sujan Shrestha'));
}
add_action('after_setup_theme', 'register_custom_menu');


/**
 * Enqueue scripts and styles.
 */
function sujan_ulistic_scripts()
{
	wp_enqueue_style('sujan-bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), true);
	wp_enqueue_style('sujan-style-css', get_template_directory_uri() . '/css/style.css', array(), true);
	wp_enqueue_style('sujan-home-css', get_template_directory_uri() . '/css/home.css', array(), true);
	wp_enqueue_script('sujan-fonts.css', get_template_directory_uri() . '/css/fonts.css', array(),  true);
	wp_enqueue_style('sujan-about-css', get_template_directory_uri() . '/css/about.css', array(), true);
	wp_enqueue_style('sujan-main-css', get_template_directory_uri() . '/css/main.css', array(), true);
	wp_enqueue_style('sujan-style', get_stylesheet_uri());
	wp_enqueue_script('sujan-bootstrap.min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(),  true);
	wp_enqueue_script('sujan-main-js', get_template_directory_uri() . '/js/main.js', array(),  true);
}
add_action('wp_enqueue_scripts', 'sujan_ulistic_scripts');



/*function enqueue_section_dark_mode_script()
{
	wp_enqueue_script('section-dark-mode', get_template_directory_uri() . '/js/section-dark-mode.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_section_dark_mode_script');

function wrap_wp_get_attachment_image_with_picture_tag($html, $attachment_id, $size, $icon, $attr)
{

	$newHtml = preg_replace('/class=".*?"/', '', $html);
	$newHtml = preg_replace('/data-aos=".*?"/', '', $newHtml);
	$newHtml = preg_replace('/animation=".*?"/', '', $newHtml);
	$newHtml = preg_replace('/data-fix=".*?"/', '', $newHtml);
	$html = '<picture class="' . (!empty($attr['class']) ? $attr['class'] : '') . '" data-aos="' . (!empty($attr['animation']) ? $attr['animation'] : '') . '" data-fix="' . (!empty($attr['data-fix']) ? $attr['data-fix'] : '') . '">' . $newHtml . '</picture>';
	// $html = '<figure class="' .( !empty($attr['class'])?$attr['class']:'') . '" data-aos="' .( !empty($attr['animation'])?$attr['animation']:'') . '">' . $newHtml . '</figure>';
	return $html;
}
add_filter('wp_get_attachment_image', 'wrap_wp_get_attachment_image_with_picture_tag', 20, 5); */



function enable_excerpts_for_posts_and_pages()
{
	add_post_type_support('post', 'excerpt'); // Enable excerpts for posts
	add_post_type_support('page', 'excerpt'); // Enable excerpts for pages
}
add_action('init', 'enable_excerpts_for_posts_and_pages');


include_once __DIR__ . '/CustomPostTypeAndTaxonomy.php';

/*Initialize Custom Post Type*/
new CustomPostTypeAndTaxonomy();
class CustomPostTypeAndTaxonomy
{

	private $text_domain = 'portfolio';

	public function __construct()
	{
		add_action('init', [$this, 'init']);
	}

	public function init()
	{
		add_action('init', [$this, 'register_portfolio_post_type'], 11);
		add_action('init', [$this, 'register_products_post_type'], 11);
		add_action('init', [$this, 'register_teams_post_type'], 11);
		add_action('init', [$this, 'register_faqs_post_type'], 11);
	}
	public function register_portfolio_post_type()
	{
		/*
         * Webinars Post Type
         * \
         * */
		$singular_name = 'Portfolio';
		$_name = 'Portfolio';
		$post_type_slug = 'portfolio';
		$post_rewrite = 'portfolio';
		$rewrite = $post_rewrite ? array('slug' => $post_rewrite, 'with_front' => false) : array();
		$labels = array(
			'name' => _x($_name, 'Post Type General Name', $this->text_domain),
			'singular_name' => _x($singular_name, 'Post Type Singular Name', $this->text_domain),
			'menu_name' => __($_name, $this->text_domain),
			'name_admin_bar' => __($_name, $this->text_domain),
			'archives' => __($_name . ' Archives', $this->text_domain),
			'parent_item_colon' => __('Parent Item:', $this->text_domain),
			'all_items' => __('All ' . $_name, $this->text_domain),
			'add_new_item' => __('Add New ' . $singular_name, $this->text_domain),
			'add_new' => __('Add New', $this->text_domain),
			'new_item' => __('New ' . $singular_name, $this->text_domain),
			'edit_item' => __('Edit ' . $singular_name, $this->text_domain),
			'update_item' => __('Update ' . $singular_name, $this->text_domain),
			'view_item' => __('View ' . $singular_name, $this->text_domain),
			'search_items' => __('Search ' . $singular_name, $this->text_domain),
			'not_found' => __('Not found', $this->text_domain),
			'not_found_in_trash' => __('Not found in Trash', $this->text_domain),
			'featured_image' => __('Featured Image', $this->text_domain),
			'set_featured_image' => __('Set featured image', $this->text_domain),
			'remove_featured_image' => __('Remove featured image', $this->text_domain),
			'use_featured_image' => __('Use as featured image', $this->text_domain),
			'insert_into_item' => __('Insert into ' . $singular_name, $this->text_domain),
			'uploaded_to_this_item' => __('Uploaded to this ' . $singular_name, $this->text_domain),
			'items_list' => __($singular_name . ' list', $this->text_domain),
			'items_list_navigation' => __($singular_name . ' list navigation', $this->text_domain),
			'filter_items_list' => __('Filter ' . $singular_name . ' list', $this->text_domain),
		);
		$args = array(
			'label' => __($singular_name, $this->text_domain),
			'description' => __($singular_name, $this->text_domain),
			'labels' => $labels,
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt'),
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 25,
			'menu_icon' => 'dashicons-portfolio',
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => true,
			'rewrite' => $rewrite,
		);

		register_post_type($post_type_slug, $args);
		/*
         * Producrts Category
         * */
		$singular_name = "Portfolio Category";
		$_name = "Portfolio Category";
		$tax_slug = "portfolio-category";
		$labels = array(
			'name'                       => _x($_name, 'Taxonomy General Name', $this->text_domain),
			'singular_name'              => _x($singular_name, 'Taxonomy Singular Name', $this->text_domain),
			'menu_name'                  => __($_name, $this->text_domain),
			'add_new_item'               => __('Add ' . $singular_name, $this->text_domain),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => false,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'capabilities' => array(
				'manage__terms' => 'edit_posts',
				'edit_terms' => 'manage_categories',
				'delete_terms' => 'manage_categories',
				'assign_terms' => 'edit_posts'
			),
			'rewrite' => array('slug' => $tax_slug, 'with_front' => false),
		);
		register_taxonomy($tax_slug, array($post_type_slug), $args);
	}




	public function register_products_post_type()
	{
		/*
         * Webinars Post Type
         * \
         * */
		$singular_name = 'Products';
		$_name = 'Products';
		$post_type_slug = 'products';
		$post_rewrite = 'products';
		$rewrite = $post_rewrite ? array('slug' => $post_rewrite, 'with_front' => false) : array();
		$labels = array(
			'name' => _x($_name, 'Post Type General Name', $this->text_domain),
			'singular_name' => _x($singular_name, 'Post Type Singular Name', $this->text_domain),
			'menu_name' => __($_name, $this->text_domain),
			'name_admin_bar' => __($_name, $this->text_domain),
			'archives' => __($_name . ' Archives', $this->text_domain),
			'parent_item_colon' => __('Parent Item:', $this->text_domain),
			'all_items' => __('All ' . $_name, $this->text_domain),
			'add_new_item' => __('Add New ' . $singular_name, $this->text_domain),
			'add_new' => __('Add New', $this->text_domain),
			'new_item' => __('New ' . $singular_name, $this->text_domain),
			'edit_item' => __('Edit ' . $singular_name, $this->text_domain),
			'update_item' => __('Update ' . $singular_name, $this->text_domain),
			'view_item' => __('View ' . $singular_name, $this->text_domain),
			'search_items' => __('Search ' . $singular_name, $this->text_domain),
			'not_found' => __('Not found', $this->text_domain),
			'not_found_in_trash' => __('Not found in Trash', $this->text_domain),
			'featured_image' => __('Featured Image', $this->text_domain),
			'set_featured_image' => __('Set featured image', $this->text_domain),
			'remove_featured_image' => __('Remove featured image', $this->text_domain),
			'use_featured_image' => __('Use as featured image', $this->text_domain),
			'insert_into_item' => __('Insert into ' . $singular_name, $this->text_domain),
			'uploaded_to_this_item' => __('Uploaded to this ' . $singular_name, $this->text_domain),
			'items_list' => __($singular_name . ' list', $this->text_domain),
			'items_list_navigation' => __($singular_name . ' list navigation', $this->text_domain),
			'filter_items_list' => __('Filter ' . $singular_name . ' list', $this->text_domain),
		);
		$args = array(
			'label' => __($singular_name, $this->text_domain),
			'description' => __($singular_name, $this->text_domain),
			'labels' => $labels,
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt'),
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 25,
			'menu_icon' => 'dashicons-products',
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => true,
			'rewrite' => $rewrite,
		);

		register_post_type($post_type_slug, $args);
		/*
         * Webinar Category
         * */
		$singular_name = "Products Category";
		$_name = "Products Category";
		$tax_slug = "products-category";
		$labels = array(
			'name'                       => _x($_name, 'Taxonomy General Name', $this->text_domain),
			'singular_name'              => _x($singular_name, 'Taxonomy Singular Name', $this->text_domain),
			'menu_name'                  => __($_name, $this->text_domain),
			'add_new_item'               => __('Add ' . $singular_name, $this->text_domain),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => false,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'capabilities' => array(
				'manage__terms' => 'edit_posts',
				'edit_terms' => 'manage_categories',
				'delete_terms' => 'manage_categories',
				'assign_terms' => 'edit_posts'
			),
			'rewrite' => array('slug' => $tax_slug, 'with_front' => false),
		);
		register_taxonomy($tax_slug, array($post_type_slug), $args);
	}


	public function register_teams_post_type()
	{
		/*
	 * Webinars Post Type
	 * \
	 * */
		$singular_name = 'Teams';
		$_name = 'Teams';
		$post_type_slug = 'teams';
		$post_rewrite = 'teams';
		$rewrite = $post_rewrite ? array('slug' => $post_rewrite, 'with_front' => false) : array();
		$labels = array(
			'name' => _x($_name, 'Post Type General Name', $this->text_domain),
			'singular_name' => _x($singular_name, 'Post Type Singular Name', $this->text_domain),
			'menu_name' => __($_name, $this->text_domain),
			'name_admin_bar' => __($_name, $this->text_domain),
			'archives' => __($_name . ' Archives', $this->text_domain),
			'parent_item_colon' => __('Parent Item:', $this->text_domain),
			'all_items' => __('All ' . $_name, $this->text_domain),
			'add_new_item' => __('Add New ' . $singular_name, $this->text_domain),
			'add_new' => __('Add New', $this->text_domain),
			'new_item' => __('New ' . $singular_name, $this->text_domain),
			'edit_item' => __('Edit ' . $singular_name, $this->text_domain),
			'update_item' => __('Update ' . $singular_name, $this->text_domain),
			'view_item' => __('View ' . $singular_name, $this->text_domain),
			'search_items' => __('Search ' . $singular_name, $this->text_domain),
			'not_found' => __('Not found', $this->text_domain),
			'not_found_in_trash' => __('Not found in Trash', $this->text_domain),
			'featured_image' => __('Featured Image', $this->text_domain),
			'set_featured_image' => __('Set featured image', $this->text_domain),
			'remove_featured_image' => __('Remove featured image', $this->text_domain),
			'use_featured_image' => __('Use as featured image', $this->text_domain),
			'insert_into_item' => __('Insert into ' . $singular_name, $this->text_domain),
			'uploaded_to_this_item' => __('Uploaded to this ' . $singular_name, $this->text_domain),
			'items_list' => __($singular_name . ' list', $this->text_domain),
			'items_list_navigation' => __($singular_name . ' list navigation', $this->text_domain),
			'filter_items_list' => __('Filter ' . $singular_name . ' list', $this->text_domain),
		);
		$args = array(
			'label' => __($singular_name, $this->text_domain),
			'description' => __($singular_name, $this->text_domain),
			'labels' => $labels,
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt'),
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 25,
			'menu_icon' => 'dashicons-groups',
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => true,
			'rewrite' => $rewrite,
		);

		register_post_type($post_type_slug, $args);
		/*
	 * Webinar Category
	 * */
		$singular_name = "Teams Category";
		$_name = "Teams Category";
		$tax_slug = "teams-category";
		$labels = array(
			'name'                       => _x($_name, 'Taxonomy General Name', $this->text_domain),
			'singular_name'              => _x($singular_name, 'Taxonomy Singular Name', $this->text_domain),
			'menu_name'                  => __($_name, $this->text_domain),
			'add_new_item'               => __('Add ' . $singular_name, $this->text_domain),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => false,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'capabilities' => array(
				'manage__terms' => 'edit_posts',
				'edit_terms' => 'manage_categories',
				'delete_terms' => 'manage_categories',
				'assign_terms' => 'edit_posts'
			),
			'rewrite' => array('slug' => $tax_slug, 'with_front' => false),
		);
		register_taxonomy($tax_slug, array($post_type_slug), $args);
	}
	public function register_faqs_post_type()
	{
		/*
	 * Webinars Post Type
	 * \
	 * */
		$singular_name = 'FAQs';
		$_name = 'FAQS';
		$post_type_slug = 'faqs';
		$post_rewrite = 'faqs';
		$rewrite = $post_rewrite ? array('slug' => $post_rewrite, 'with_front' => false) : array();
		$labels = array(
			'name' => _x($_name, 'Post Type General Name', $this->text_domain),
			'singular_name' => _x($singular_name, 'Post Type Singular Name', $this->text_domain),
			'menu_name' => __($_name, $this->text_domain),
			'name_admin_bar' => __($_name, $this->text_domain),
			'archives' => __($_name . ' Archives', $this->text_domain),
			'parent_item_colon' => __('Parent Item:', $this->text_domain),
			'all_items' => __('All ' . $_name, $this->text_domain),
			'add_new_item' => __('Add New ' . $singular_name, $this->text_domain),
			'add_new' => __('Add New', $this->text_domain),
			'new_item' => __('New ' . $singular_name, $this->text_domain),
			'edit_item' => __('Edit ' . $singular_name, $this->text_domain),
			'update_item' => __('Update ' . $singular_name, $this->text_domain),
			'view_item' => __('View ' . $singular_name, $this->text_domain),
			'search_items' => __('Search ' . $singular_name, $this->text_domain),
			'not_found' => __('Not found', $this->text_domain),
			'not_found_in_trash' => __('Not found in Trash', $this->text_domain),
			'featured_image' => __('Featured Image', $this->text_domain),
			'set_featured_image' => __('Set featured image', $this->text_domain),
			'remove_featured_image' => __('Remove featured image', $this->text_domain),
			'use_featured_image' => __('Use as featured image', $this->text_domain),
			'insert_into_item' => __('Insert into ' . $singular_name, $this->text_domain),
			'uploaded_to_this_item' => __('Uploaded to this ' . $singular_name, $this->text_domain),
			'items_list' => __($singular_name . ' list', $this->text_domain),
			'items_list_navigation' => __($singular_name . ' list navigation', $this->text_domain),
			'filter_items_list' => __('Filter ' . $singular_name . ' list', $this->text_domain),
		);
		$args = array(
			'label' => __($singular_name, $this->text_domain),
			'description' => __($singular_name, $this->text_domain),
			'labels' => $labels,
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt'),
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 25,
			'menu_icon' => 'dashicons-admin-comments',
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => true,
			'rewrite' => $rewrite,
		);

		register_post_type($post_type_slug, $args);
		/*
	 * Webinar Category
	 * */
		$singular_name = "Faqs Category";
		$_name = "Faqs Category";
		$tax_slug = "faqs-category";
		$labels = array(
			'name'                       => _x($_name, 'Taxonomy General Name', $this->text_domain),
			'singular_name'              => _x($singular_name, 'Taxonomy Singular Name', $this->text_domain),
			'menu_name'                  => __($_name, $this->text_domain),
			'add_new_item'               => __('Add ' . $singular_name, $this->text_domain),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => false,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'capabilities' => array(
				'manage__terms' => 'edit_posts',
				'edit_terms' => 'manage_categories',
				'delete_terms' => 'manage_categories',
				'assign_terms' => 'edit_posts'
			),
			'rewrite' => array('slug' => $tax_slug, 'with_front' => false),
		);
		register_taxonomy($tax_slug, array($post_type_slug), $args);
	}
}


// Enqueue jQuery for AJAX
function enqueue_jquery_for_ajax()
{
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery_for_ajax');

// Load more posts function
function load_more_posts()
{
	$page = $_POST['page'];
	$tags = get_tags();
	$args = array(
		'paged' => $page,
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

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
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
		<?php
		}
		wp_reset_postdata();
	} else {
		// No more posts to load
		echo 'No more posts';
	}

	die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

// Enqueue JavaScript for AJAX and pass AJAX URL to script
function load_more_scripts()
{
	global $wp_query;
	wp_enqueue_script('load-more', get_template_directory_uri() . '/load-more.js', array('jquery'), '1.0', true);
	wp_localize_script('load-more', 'loadmoreajax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'posts' => json_encode($wp_query->query_vars),
		'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages,
		'security' => wp_create_nonce("load_more"),
		'noposts' => __('No more posts found', 'loadmore')
	));
}
add_action('wp_enqueue_scripts', 'load_more_scripts');



function custom_woocommerce_product_grid_shortcode($atts)
{
	ob_start(); // Start output buffering

	// Shortcode attributes
	$atts = shortcode_atts(array(
		'limit' => 10, // Number of products to display (default: 10)
		'columns' => 4, // Number of columns in the grid (default: 4)
	), $atts);

	// Query WooCommerce products
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => intval($atts['limit']),
	);
	$products = new WP_Query($args);

	// Output product grid
	if ($products->have_posts()) :
		echo '<div class="product-grid">';
		while ($products->have_posts()) : $products->the_post();
			global $product;
		?>
			<div class="product-item col-md-<?php echo intval($atts['columns']); ?>">
				<a href="<?php the_permalink(); ?>">
					<?php
					if (has_post_thumbnail()) {
						the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="150" height="150" />';
					}
					?>
					<h2><?php the_title(); ?></h2>
					<span class="price"><?php echo $product->get_price_html(); ?></span>
				</a>
				<?php woocommerce_template_loop_add_to_cart(); ?>
			</div>
<?php
		endwhile;
		echo '</div>';
	else :
		echo 'No products found';
	endif;

	wp_reset_postdata();

	return ob_get_clean(); // Return the buffered output
}

add_shortcode('product_grid', 'custom_woocommerce_product_grid_shortcode');
