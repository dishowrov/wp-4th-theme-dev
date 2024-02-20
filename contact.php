<?php

$info_phone = get_post_meta(get_the_ID(), "phone no", true);
$info_email = get_post_meta(get_the_ID(), "email", true);

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
                        <div class="col-md-6 left">

                            <div class="contact-services">
                                <h5 class="contact-portion-title">SERVICES</h5>

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
                                <h5 class="contact-portion-title">STAY CONNECTED</h5>

                                <?php
                                if (is_active_sidebar("temo-contact-social-medias")) :
                                    dynamic_sidebar("temo-contact-social-medias");
                                endif;
                                ?>
                            </div>

                            <div class="contact-cta">
                                <h5 class="contact-portion-title">SERVICES</h5>
                                <p class="contact-portion-details">I'm available for freelance projects</p>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="">
                                <h5 class="contact-portion-title">ABOUT</h5>
                                <p class="contact-portion-details">
                                    Joshua is a professional web developer. Feel free to get in touch with me.
                                </p>
                            </div>

                            <div>
                                <h5 class="contact-portion-title">EMAIL</h5>
                                <span>
                                    <?php
                                    echo esc_html($info_email);
                                    ?>
                                </span>
                            </div>

                            <div>
                                <h5 class="contact-portion-title">CALL</h5>
                                <span>
                                    <?php
                                    echo esc_html($info_phone);
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>