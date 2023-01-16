<?php
//header
get_header();
?>

<article>
    <h1>Mon titre</h1>
    <?php   
    the_field("main_text");
    ?>
</article>



<?php
//footer
get_footer();
    ?>