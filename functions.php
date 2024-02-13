<?php


function temo_bootstrapping()
{
    load_theme_textdomain("temo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

    // $temo_custom_header_details = array(
    //     'header-text'               => true,
    //     'default-text-color'        => '#81d742',
    //     'height' => 700,
    //     'width' => 500,
    //     'flex-width' => true,
    // );
    // add_theme_support("custom-header", $webly_custom_header_details);

    // $webly_custom_logo_details = array(
    //     "height"    => '100',
    //     "width"     => '100'
    // );
    // add_theme_support("custom-logo", $webly_custom_logo_details);

    add_theme_support("custom-background");
    add_theme_support("post-formats", array("aside", "gallery", "link", "image", "quote", "status", "video", "audio", "chat"));

    register_nav_menu("temo-top-menu", __("Nav Menu", "temo"));
}
add_action("after_setup_theme", "temo_bootstrapping");

function temo_assets()
{
    wp_enqueue_style("temo-bootstrapCSS", get_theme_file_uri("/assets/css/bootstrap.min.css"));
    wp_enqueue_style("dashicons");
    wp_enqueue_style("temo-customCSS", get_stylesheet_uri(), null, time()); 

    wp_enqueue_script("temo-bootstrapJS", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), "0", true);
    wp_enqueue_script("temo-customJS", get_theme_file_uri("/assets/js/custom.js"), array("jquery"), "0", true);
}
add_action("wp_enqueue_scripts", "temo_assets");
