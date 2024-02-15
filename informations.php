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

                <table>
                    <tr>
                        <th>Information</th>
                    </tr>

                    <tr>
                        <td>
                            <span>Name</span>
                        </td>
                        <td>
                            <?php
                            echo esc_html($info_name);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Birthday</span>
                        </td>
                        <td>
                            <?php
                            echo esc_html($info_birthday);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Phone</span>
                        </td>
                        <td>
                            <?php
                            echo esc_html($info_phone);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Email</span>
                        </td>
                        <td>
                            <?php
                            echo esc_html($info_email);
                            ?>
                        </td>
                    </tr>
                </table>

            </div>

            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-6">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_experiences)
                            ?>
                        </strong>

                        <p class="featured-text">Years of Experiences</p>
                    </div>

                    <div class="col-md-6">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_customers)
                            ?>
                        </strong>

                        <p class="featured-text">Happy Customers</p>
                    </div>

                    <div class="col-md-6">
                        <strong class="featured-numbers">
                            <?php
                            echo esc_html($info_projects)
                            ?>
                        </strong>

                        <p class="featured-text">Project Finished</p>
                    </div>

                    <div class="col-md-6">
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