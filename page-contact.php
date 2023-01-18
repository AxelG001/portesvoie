<?php
//header
get_header();

$fields=get_fields(get_the_ID());



//echo "<pre>" . var_dump($fields) . "</pre>";

?>

<section class="contact">
    <div class="wrapper_big">
    <?php 
    the_content();
    ?>
    </div>
</section>


<?php
get_footer();
?>