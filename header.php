<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wilson_Landing
 * @version 1.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Form Pages - WPForms</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>