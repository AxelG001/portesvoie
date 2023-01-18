<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<header>
    <div class="header_wrapper wrapper_big" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos.png">
        <?php wp_nav_menu(array('menu' => 'main_nav')); ?>
    </div>

</header>

<body <?php body_class(); ?>>
    
