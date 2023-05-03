<?php

/** Header template
*
* @package Antilla
*
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bodyNewDesign'); ?>>

    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav') ?>
        </header>
