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

            </div>

            <div class="col-md-6">

            </div>
        </div>
    </div>
</section>