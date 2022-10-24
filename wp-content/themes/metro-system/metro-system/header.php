<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Metro_System
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container header__container">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <div class="logo-menu">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <img src="<?php echo $image[0];?>" alt="">
        </a>
        </div>
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'container'    => 'nav',
            'container_class'  => 'menu',
            'menu_class'    => 'menu__list',
            'link_class'        => 'menu__link',
            'list_item_class'   => 'menu__item'
        ) );
        ?>
    </div>


</header>

