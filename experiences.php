<?php

$args = array(
    'posts_per_page' => 5,
    'post_type' => 'Experiences',
    'post_status' => 'publish',
    'order' => 'ASC',
    'paged' => '',
);

$temo_experienced_companies_logo = new WP_Query($args);
   
// if ($temo_experienced_companies_logo->have_posts()) :

?>


<section>
    <div class="container experiences">
        <div class="row">
            <div class="col-md-12">
                <div class="exp-title">
                    <?php
                    if (is_active_sidebar("temo-experiences-title-txt")) :
                        dynamic_sidebar("temo-experiences-title-txt");
                    endif;
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <?php
            if ($temo_experienced_companies_logo->have_posts()) :

                while ($temo_experienced_companies_logo->have_posts()) :
                    $temo_experienced_companies_logo->the_post();
            ?>

                    <div class="exp-company">
                        <?php
                        the_post_thumbnail();
                        ?>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();

            else :
                echo ('Sorry, no Logo published today, please try again tomorrow');
            endif;
            ?>
        </div>
    </div>
</section>

<?php

?>