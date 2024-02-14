<?php

$hero_subtitle = get_post_meta(get_the_ID(), "hero subtitle", true);
$hero_title = get_post_meta(get_the_ID(), "hero title", true);
$hero_btn_text = get_post_meta(get_the_ID(), "hero button text", true);
$hero_btn_link = get_post_meta(get_the_ID(), "hero button link", true);


?>


<!-- Header -->
<div class="container">
    <div class="row">
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
    </div>
</div>




<!-- Hero -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <!-- For the profile picture -->
            <?php
            // if (is_active_sidebar('temo-hero-pp')) :
            //     dynamic_sidebar('temo-hero-pp');
            // endif;
            ?>

            <!-- For the profile picture -->
            <?php
            $profile_picture = get_theme_mod('profile_picture');
            if ($profile_picture) {
                echo '<img src="' . esc_url($profile_picture) . '" alt="Profile Picture">';
            }
            ?>

            <!-- For the other informations -->
            <h4>
                <?php echo esc_html($hero_subtitle); ?>
            </h4>

            <h1>
                <?php echo esc_html($hero_title); ?>
            </h1>

            <a href="<?php echo esc_attr($hero_btn_link); ?>">
                <?php echo esc_html($hero_btn_text); ?>
            </a>

        </div>

        <div class="col-md-6">

        </div>
    </div>
</div>