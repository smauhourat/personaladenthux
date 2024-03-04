<?php
/**
 * The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package personaladhentux
 * @since Personal Adhentux Theme 1.0
 */
/*
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
*/
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <title>Personal WP Theme - Adhentux</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">  
    <?php wp_head(); ?>
</head>

 <body <?php body_class(); ?>>
    <header class="my-logo">
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
 </header>
 <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>