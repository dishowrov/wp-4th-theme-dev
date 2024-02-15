<?php

$info_name = get_post_meta(get_the_ID(), "username", true);
$info_birthday = get_post_meta(get_the_ID(), "birthday", true);
$info_phone = get_post_meta(get_the_ID(), "phone no", true);
$info_email = get_post_meta(get_the_ID(), "email", true);

$info_experiences = get_post_meta(get_the_ID(), "experience in years", true);
$info_customers = get_post_meta(get_the_ID(), "customers", true);
$info_projects = get_post_meta(get_the_ID(), "projects", true);
$info_awards = get_post_meta(get_the_ID(), "awards", true);

?>



<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="profile-thumb">
                    <div class="profile-title">
                        <h4 class="mb-0">Information</h4>
                    </div>

                    <div class="profile-body">
                        <p>
                            <span class="profile-small-title">Name</span>
                            <span>
                                <?php
                                echo esc_html($info_name);
                                ?>
                            </span>
                        </p>

                        <p>
                            <span class="profile-small-title">Birthday</span>
                            <span>
                                <?php
                                echo esc_html($info_birthday);
                                ?>
                            </span>
                        </p>

                        <p>
                            <span class="profile-small-title">Phone</span>
                            <span><a href="tel: 305-240-9671">
                                    <?php
                                    echo esc_html($info_phone);
                                    ?>
                                </a></span>
                        </p>

                        <p>
                            <span class="profile-small-title">Email</span>
                            <span><a href="mailto:hello@josh.design">
                                    <?php
                                    echo esc_html($info_email);
                                    ?>
                                </a></span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="row">

                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_experiences)
                            ?>
                        </strong>

                        <p class="featured-text">Years of Experiences</p>
                    </div>

                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_customers)
                            ?>
                        </strong>

                        <p class="featured-text">Happy Customers</p>
                    </div>

                    <div class="col-lg-6 col-6 pt-4">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_projects)
                            ?>
                        </strong>

                        <p class="featured-text">Project Finished</p>
                    </div>

                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_awards)
                            ?>
                        </strong>

                        <p class="featured-text">Digital Awards</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>