<?php

$about_subtitle = get_post_meta(get_the_ID(), "about subtitle", true);
$about_details = get_post_meta(get_the_ID(), "about details", true);
   
?>

<!-- About -->
<div class="container about">
    <div class="row">
        <div class="col-md-6">
            <span class="about-left-img">
                <?php
                if (is_active_sidebar('temo-about-left-img')) :
                    dynamic_sidebar('temo-about-left-img');
                endif;
                ?> 
            </span>
        </div>

        <div class="col-md-6">
            <div class="about-right-top">
                <?php
                if (is_active_sidebar('temo-about-title')) :
                    dynamic_sidebar('temo-about-title');
                endif;
                ?>

                <?php
                if (is_active_sidebar('temo-about-right-img')) :
                    dynamic_sidebar('temo-about-right-img');
                endif;
                ?>
            </div>

            <h3>
                <?php
                echo esc_html("$about_subtitle");
                ?>
            </h3>

            <p>
                <?php
                echo esc_html("$about_details");
                ?>
            </p>
        </div>
    </div>
</div>