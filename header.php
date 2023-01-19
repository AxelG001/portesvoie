<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php wp_head(); ?>
</head>
<header>
    <div class="header_wrapper wrapper_big" >
        <a href="<?php echo home_url()?>"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos.png">
        </a>
        <?php wp_nav_menu(array('menu' => 'main_nav')); ?>
    </div>

</header>

<body <?php body_class(); ?>>
    
