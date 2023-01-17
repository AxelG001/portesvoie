<?php
//header
get_header();

$fields=get_fields(get_the_ID());



//echo "<pre>" . var_dump($fields) . "</pre>";

?>

<section class="contact">
    <?php 
    the_content();
    ?>
</section>


<?php
get_footer();
?>