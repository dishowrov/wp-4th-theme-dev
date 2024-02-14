    <!-- Header Menu -->
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
                            'menu_class' => 'list-inline text-center',
                        )
                    )
                    ?>
                </div>
            </div>
        </div>
    </div>