<?php

$service_icon = get_post_meta(get_the_ID(), "service icon", true);

$args = array(
    'posts_per_page' => 5,
    'post_type' => 'services',
    'post_status' => 'publish',
    'order' => 'ASC',
    'paged' => '',
);

$temo_services_query = new WP_Query($args);

if ($temo_services_query->have_posts()) :

?>

    <section id='' class="services">
        <div class="container">
            <div class="row gy-4">

                <?php while ($temo_services_query->have_posts()) :
                    $temo_services_query->the_post();
                ?>

                    <div class="col-md-6">
                        <div class="services-thumb">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">
                                    <?php
                                    the_title();
                                    ?>
                                </h3>

                                <div class="services-price-wrap ms-auto">
                                    <p class="services-price-text mb-0">$2,400</p>
                                    <div class="services-price-overlay"></div>
                                </div>
                            </div>

                            <p>
                                <?php
                                the_content();
                                ?>
                            </p>

                            <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                            <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-globe"></i>
                            </div> -->

                            <div class="services-icon-part">
                                <?php
                                echo esc_html($service_icon);
                                ?>
                            </div>
                        </div>
                    </div>

                <?php

                endwhile;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

<?php
else :
    echo ('Sorry, no project published today, please try tomorrow');
endif;

?>