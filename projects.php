<?php


$args = array(
    'posts_per_page' => 5,
    'post_type' => 'projects',
    'post_status' => 'publish',
    'order' => 'ASC',
    'paged' => '',
);

$temo_projects_query = new WP_Query($args);

if ($temo_projects_query->have_posts()) :

?>

    <div class="container projects">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">

                <div class="project-title">
                    <div>
                        <?php
                        if (is_active_sidebar("temo-projects-title-img")) :
                            dynamic_sidebar("temo-projects-title-img");
                        endif;
                        ?>
                    </div>

                    <div>
                        <?php
                        if (is_active_sidebar("temo-projects-title-txt")) :
                            dynamic_sidebar("temo-projects-title-txt");
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="row gy-4">

            <?php while ($temo_projects_query->have_posts()) :
                $temo_projects_query->the_post();
            ?>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <!-- <small class="projects-tag">Branding</small> -->

                            <?php
                            // Get the terms (categories) for the current project
                            $project_categories = get_the_terms(get_the_ID(), 'project_category');

                            // Check if there are categories and loop through them
                            if ($project_categories && !is_wp_error($project_categories)) {
                                echo '<small class="projects-tag">';
                                foreach ($project_categories as $category) {
                                    echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
                                }
                                echo '</small>';
                            }
                            ?>

                            <h5 class="projects-title">
                                <?php
                                the_title();
                                ?>
                            </h5>
                        </div>

                        <a href="#" class="popup-image">
                            <div class="projects-image">
                                <?php
                                the_post_thumbnail();
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

            <?php

            endwhile;
            wp_reset_postdata();
             ?>

        </div>
    </div>


<?php
else :
    echo ('Sorry, no project published today, please try again tomorrow');
endif;

?>