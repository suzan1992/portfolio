<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('', true, 'right'); ?> </title>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicons.png" type="image/x-icon" />
<?php wp_head(); ?>
</head>
<body>
<header id="main-header">
<div class="main-header-wrap">
<div class="container container-lg-lg">
<div class="row">
<div class="col-sm-12">
<div class="table-content">
<div class="navigation">
<?php wp_nav_menu(array('theme_location'=>'header-menu','menu_class'=>'main-menu')); ?>
</div><!--navigation-->
</div><!--table-content-->
</div><!--col-sm-12-->
</div><!--row-->
</div><!--container-->
</div><!--main-header-wrap-->
<div class="header-content">
<div class="container">
<div class="row">
<div class="col-sm-12 small-screen-center">
<div class="banner-top">
<div class="banner-logo">
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Dental Technology Partners"></a>
</div><!-- banner-logo -->
<div class="call">
<h4>Give Us a Call:
<span>{phone}</span></h4>
</div>
</div>
</div><!--col-sm-12-->
</div><!--row-->
</div><!--container-->
</div><!--header-content-->
</header>
<div id="main-banner">
<?php query_posts('posts_per_page=1&category_name=banner');
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="banner-holder">
<?php
$banner_image=get_field('banner_image');
if ( has_post_thumbnail() ) :
the_post_thumbnail();
elseif(!empty($banner_image)) : ?>
<div class="banner-bg" style="background-image: url('<?php echo $banner_image; ?>');">
<?php else: ?>
<div class="banner-bg">
<?php
endif;
?>
</div><!--banner-bg-->
<div class="banner-content">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="table-wrapper">
<div class="col-7-content">
<div class="banner-wrap">

<div class="banner-text text-center">
<h1>
<?php the_title();?> <br>
<?php echo get_field('banner_subtitle'); ?>
</h1>
<?php the_excerpt(); ?>
<?php
$readmore = get_field('read_more');
if (!empty($readmore)) :
?>

<a href="<?php the_permalink();?>"><button class="btn-read"><?php echo $readmore; ?></button></a>
<?php
else: ?>
<a href="<?php the_permalink();?>"><button class="btn-read">READ MORE</button></a>

<?php
endif;
?>

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