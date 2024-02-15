<?php

function temo_bootstrapping()
{
    load_theme_textdomain("temo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

    $temo_custom_header_details = array(
        'header-text'               => true,
        'default-text-color'        => '#81d742',
        'height' => 700,
        'width' => 500,
        'flex-width' => true,
    );
    add_theme_support("custom-header", $temo_custom_header_details);

    $temo_custom_logo_details = array(
        "height"    => '50',
        "width"     => '150'
    );
    add_theme_support("custom-logo", $temo_custom_logo_details);

    add_theme_support("custom-background");

    register_nav_menu("temo-nav-menu", __("Nav Menu", "temo"));
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

function temo_widget_areas()
{
    register_sidebar(
        array(
            'name' => __('Header Right Info', 'temo'),
            'id' => 'temo-header-info',
            'description' => __("Header part's extra informations area of the user", 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Person Profile Picture', 'temo'),
            'id' => 'temo-hero-pp',
            'description' => __('This is a profile picture section of the user', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Person Big Picture', 'temo'),
            'id' => 'temo-hero-big-img',
            'description' => __('This is a full and big picture section of the user', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('About Left Image', 'temo'),
            'id' => 'temo-about-left-img',
            'description' => __('This is a about section image', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('About Title', 'temo'),
            'id' => 'temo-about-title',
            'description' => __('This is title of about section', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name' => __('About Right Image', 'temo'),
            'id' => 'temo-about-right-img',
            'description' => __('This is another about section image', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
}
add_action('widgets_init', 'temo_widget_areas');

function temo_customize_register($wp_customize)
{
    $wp_customize->add_section('profile_section', array(
        'title' => __('Profile Picture', 'temo'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('profile_picture', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_picture', array(
        'label' => __('Upload Your Profile Picture', 'temo'),
        'section' => 'profile_section',
        'settings' => 'profile_picture',
    )));
}
add_action('customize_register', 'temo_customize_register');

function temo_handle_profile_picture()
{
    if (isset($_POST['profile_picture'])) {
        set_theme_mod('profile_picture', sanitize_text_field($_POST['profile_picture']));
    }
}
add_action('wp_ajax_handle_profile_picture', 'temo_handle_profile_picture');

?>