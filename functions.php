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
    
    register_sidebar(
        array(
            'name' => __('Services Title Image', 'temo'),
            'id' => 'temo-services-title-img',
            'description' => __('This is Services title image', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Services Title Text', 'temo'),
            'id' => 'temo-services-title-txt',
            'description' => __('This is Services title text', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Projects Title Image', 'temo'),
            'id' => 'temo-projects-title-img',
            'description' => __('This is Projects title image', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Projects Title txt', 'temo'),
            'id' => 'temo-projects-title-txt',
            'description' => __('This is Projects title txt', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Contacts Title Image', 'temo'),
            'id' => 'temo-contacts-title-img',
            'description' => __('This is Contacts title Image', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Contacts Title Text', 'temo'),
            'id' => 'temo-contacts-title-txt',
            'description' => __('This is Contacts title text', 'temo'),
            'before_widget' => '<div class="widget %1$s %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Experiences Title Text', 'temo'),
            'id' => 'temo-experiences-title-txt',
            'description' => __('This is Experiences title text', 'temo'),
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


function temo_services()
{
    register_post_type(
        'Services',
        array(
            'labels' => array(
                'name' => ('Services'),
                'singular_name' => ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'new_item' => ('New Service'),
                'view_item' => ('View Service'),
                'not_found' => ("Sorry, we coundn't find the project you are looking for."),
            ),
            'menu_icon' => 'dashicons-admin-tools',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 3,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'service'),
            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init', 'temo_services');



function temo_projects()
{
    register_post_type(
        'Projects',
        array(
            'labels' => array(
                'name' => ('Projects'),
                'singular_name' => ('Project'),
                'add_new' => ('Add New Project'),
                'add_new_item' => ('Add New Project'),
                'edit_item' => ('Edit Project'),
                'new_item' => ('New Project'),
                'view_item' => ('View Project'),
                'not_found' => ("Sorry, we coundn't find the project you are looking for."),
            ),
            'menu_icon' => 'dashicons-images-alt2',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 4,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'project'),
            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        )
    );

    register_taxonomy(
        'project_category',
        'projects',
        array(
            'label' => __('Project Categories', 'temo'),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'project-category'),
        )
    );

    add_theme_support('post-thumbnails');
}
add_action('init', 'temo_projects');
