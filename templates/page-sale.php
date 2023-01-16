<?php

    /*
        Template Name: Vente
    */
    get_header();

    //price
  

    //image
    $image = get_field(selector: 'image')
?>

<h1><?php echo get_the_title();?></h1>
<p><?php the_field(selector:'prix');?>€</p>

<?php if(get_field(selector:'address')):?>
    <p><?php the_field(selector:'address');?></p>
    <?php else: ?>
        <p> aucune adresse spécifié</p>
<?php endif; ?>

<img src="<?php echo($image['sizes']['medium_large'])?>"
height="<?php echo($image['width']['medium_large_width'])?> "
alt="<?php echo($image['alt'])?>">
ContenU de la page vente 



<?php
//footer
get_footer();
    ?>