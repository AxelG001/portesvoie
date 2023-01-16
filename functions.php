<?php

    //load CSS 
    if (!is_admin()){
    wp_enqueue_style('app', get_template_directory_uri().'/assets/css/app.css',array(), 1,'all');
    };
    include "include/const.php";

    ?>

