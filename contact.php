<?php

// Custom query to retrieve only project titles
$query = "SELECT ID, post_title FROM $wpdb->posts WHERE post_type = 'services' AND post_status = 'publish'";

// Get results from the database
$results = $wpdb->get_results($query);

?>

<div class="container contact">
    <div class="row">

        <div class="col-md-6">
            <div class="contact-title">
                <div>
                    <?php
                    if (is_active_sidebar("temo-contacts-title-img")) :
                        dynamic_sidebar("temo-contacts-title-img");
                    endif;
                    ?>
                </div>

                <div>
                    <?php
                    if (is_active_sidebar("temo-contacts-title-txt")) :
                        dynamic_sidebar("temo-contacts-title-txt");
                    endif;
                    ?>
                </div>
            </div>
        </div>

    </div>

    <div class="contact-bottom">
        <div class="row">

            <div class="col-md-6">

                <div class="contact-bottom-left">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="contact-services">
                                <?php
                                if ($results) {
                                    echo '<ul>';
                                    foreach ($results as $result) {
                                        $project_title = esc_html($result->post_title);
                                        echo '<li><a href="' . esc_url(get_permalink($result->ID)) . '">' . $project_title . '</a></li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo 'No projects found.';
                                }
                                ?>
                            </div>

                            <div class="contact-medias">
                                <?php
                                if (is_active_sidebar("temo-contact-social-medias")) :
                                    dynamic_sidebar("temo-contact-social-medias");
                                endif;
                                ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>