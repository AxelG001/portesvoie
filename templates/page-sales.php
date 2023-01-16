<?php
    /*
        Template Name: Ventes
    */

    // Header
    get_header();

    // Sales
    $sales = get_pages(array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'post_status' => 'publish',
        'parent' => $post->ID,
        'meta_key' => '_wp_page_template',
        'meta_value' => 'templates/page-sale.php'
    ));
?>

<h1><?php echo (get_the_title());?></h1>

<h3>Ventes</h3>
<?php foreach ($sales as $sale):?>
    <article>
        <p><?php echo($sale -> post_title);?></p>
    </article>
<?php endforeach;?>

<?php
    //Footer
    get_footer();
?>