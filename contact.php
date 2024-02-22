<?php

$info_phone = get_post_meta(get_the_ID(), "phone no", true);
$info_email = get_post_meta(get_the_ID(), "email", true);

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'services',
    'post_status' => 'publish',
    'order' => 'ASC',
    'paged' => '',
);
$services_query = new WP_Query($args);

// Custom query to retrieve only project titles
$query = "SELECT ID, post_title FROM $wpdb->posts WHERE post_type = 'services' AND post_status = 'publish'";

// Get results from the database
$results = $wpdb->get_results($query);

?>

<div class="container-fluid contact">
    <div class="container">
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
                                    <p class="contact-portion-details">
                                        <?php
                                        echo esc_html($info_email);
                                        ?>
                                    </p>
                                </div>

                                <div>
                                    <h5 class="contact-portion-title">CALL</h5>
                                    <p class="contact-portion-details">
                                        <?php
                                        echo esc_html($info_phone);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-bottom-right">
                        <form action="">

                            <!-- Name and Email -->
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Name" class="contact-form-top">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Email Address" class="contact-form-top">
                                </div>
                            </div>

                            <!-- Services Checkboxes -->
                            <div class="row">
                                <?php
                                if ($results) {
                                    echo '<div class="">';

                                    foreach ($results as $result) {
                                        $post_id = $result->ID;
                                        $project_title = esc_html($result->post_title);
                                        $service_icon = get_post_meta(get_the_ID(), "service icon", true);
                                ?>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                                <input name="branding" type="checkbox" class="form-check-input" id="<?php echo $project_title; ?>" value="1">

                                                <label class="form-check-label" for="<?php echo $project_title; ?>">
                                                    <span class="dashicons dashicons-admin-site-alt3"></span>

                                                    <span>
                                                        <?php
                                                        if ($services_query->have_posts()) :
                                                            while ($services_query->have_posts()) : $services_query->the_post();
                                                                $post_id = get_the_ID();
                                                                echo $service_icon;
                                                            endwhile;
                                                            wp_reset_postdata();
                                                        endif;
                                                        ?>
                                                    </span>

                                                    <h4 class="form-check-label-text">
                                                        <?php echo $project_title; ?>
                                                    </h4>
                                                </label>
                                            </div>
                                        </div>
                                <?php
                                    }
                                    echo '</div>';
                                } else {
                                    echo 'No projects found.';
                                }
                                ?>
                            </div>

                            <!-- Message -->
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="message" rows="7" cols="50" name="message" placeholder="Tell me about the project"></textarea>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-12">
                                <div class="contact-form-btn">
                                    <?php
                                    if (is_active_sidebar("temo-contact-form-btn")) :
                                        dynamic_sidebar("temo-contact-form-btn");
                                    endif;
                                    ?>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>