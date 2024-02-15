<?php

$hero_subtitle = get_post_meta(get_the_ID(), "hero subtitle", true);
$hero_title = get_post_meta(get_the_ID(), "hero title", true);
$hero_btn_text = get_post_meta(get_the_ID(), "hero button text", true);
$hero_btn_link = get_post_meta(get_the_ID(), "hero button link", true);

?>

<!-- Header -->
<div class="container-fluid header">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-md-2">

                <!-- Custom Logo Setup -->
                <?php
                if (current_theme_supports("custom-logo")) :
                ?>
                    <div class="hero-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php
                endif;
                ?>
            </div>

            <!-- Hero Menu -->
            <div class="col-md-7">
                <div class="navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'temo-nav-menu',
                            'menu_id' => 'nav-menu-container',
                            'menu_class' => 'list-inline',
                        )
                    )
                    ?>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-md-3">
                <div class="header-rigt-part">
                    <?php
                    if (is_active_sidebar('temo-header-info')) :
                        dynamic_sidebar('temo-header-info');
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero & Header -->
<div class="container-fluid hero-nd-header">
    <img src="<?php echo get_template_directory_uri(); ?> ./assets/img/hero-part/hero-bg-img.png" alt="" class="hero-bg-shape">

    <!-- Hero -->
    <div class="container hero">
        <div class="row">
            <div class="col-md-7">

                <!-- For the profile picture -->
                <div class="hero-left-top">
                    <span class="hero-profile-pic">
                        <?php
                        if (is_active_sidebar('temo-hero-pp')) :
                            dynamic_sidebar('temo-hero-pp');
                        endif;
                        ?>
                    </span>

                    <!-- For the other informations -->
                    <span class="hero-subtitle">
                        <?php echo esc_html($hero_subtitle); ?>
                    </span>
                </div>

                <h1 class="hero-title">
                    <?php echo esc_html($hero_title); ?>
                </h1>

                <a href="<?php echo esc_attr($hero_btn_link); ?>" class="hero-btn">
                    <?php echo esc_html($hero_btn_text); ?>
                </a>

            </div>

            <div class="col-md-5 position-relative">
                <div class="hero-image-wrap"></div>
                <div class="hero-image img-fluid">
                    <?php
                    if (is_active_sidebar('temo-hero-big-img')) :
                        dynamic_sidebar('temo-hero-big-img');
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>

</div>