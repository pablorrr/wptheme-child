<?php
/**
 * The template for displaying header
 *
 * Displays all of the <head>  and <header> section
 *
 * @package wptheme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title"
          content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>
<header id="home" class="home" style="background-image: url('<?php header_image(); ?>');" role="banner">
    <div class="container-fluid text-vcenter">
        <div class="row align-items-start">
            <div class="col-md-12">
               <h1>to jest header motywu potomnego</h1>

                <!-- main home content -->
                <div class="site-branding">
                    <div class="wrap">
                        <div class="site-branding-text">
                            <?php if (is_front_page() && !has_custom_logo(get_current_blog_id()) || is_archive() || is_single() || is_page()) : ?>
                                <h1 class="site-title respo"><a style="font-size:2.3em;" class="site-title"
                                                                href="<?php echo esc_url(home_url('/')); ?>"
                                                                rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php else : the_custom_logo();
                            endif;//is_front_page

                            $description = get_bloginfo('description', 'display');

                            if ($description || is_customize_preview()) : ?>

                                <div class="col-md-12 mt-1">

                                    <p class="site-description respo"><?php echo $description; ?></p>
                                    <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>

                                </div><!-- .col-md-12 .mt-1 -->
                                <!-- end if is_customize_preview()-->
                            <?php endif; ?>
                        </div><!-- .site-branding-text-->
                    </div><!--wrap .-->
                </div><!--.site-branding-->
            </div><!--.col-md-12 -->
        </div><!--.row align-items-start-->
    </div><!--container-fluid text-vcenter-->
</header>
