<?php

function bjarne_theme_support()
{
    // Adds dynamic title tag support
    add_theme_support('title-tag');

    // enable featured images on posts
    add_theme_support('post-thumbnails', array('post'));
}
add_action("after_setup_theme", "bjarne_theme_support");


// returns content of the about page
function bjarne_get_about_content()
{
    $args = array(
      'name'        => 'about',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    );
    
    $posts = get_posts($args);

    $about_page = $posts[0];
    // $about_page = get_post(26);
    $about_content = $about_page->post_content;
    return $about_content;
}

function bjarne_get_featured_image_src($post_id, $size)
{
    $image_id = get_post_thumbnail_id($post_id);
    $image = wp_get_attachment_image_src($image_id, $size);
    $image_src = $image[0];
    return $image_src;
}


function bjarne_register_styles()
{
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('bjarne-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'bjarne_register_styles');


function bjarne_register_scripts()
{
    wp_enqueue_script('bjarne-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);
    wp_enqueue_script('bjarne-js', get_template_directory_uri() . "/assets/js/main.js", array("bjarne-jquery"), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bjarne_register_scripts');
