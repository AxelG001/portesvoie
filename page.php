<?php
//header
get_header();

$fields=get_fields(get_the_ID());
$colored_heading=$fields["colored_heading"];
$blocks_content = $fields["blocks_content"];



//echo "<pre>" . var_dump($fields) . "</pre>";

?>

<section class="vous-etes">
<div class="title-background" style="background-color:<?php echo $colored_heading["background_color"]?>">
    <h1 class="title-text" style="color:<?php echo $colored_heading["text_color"]?>">
        <?php echo $colored_heading["title"];?>
    </h1>
</div>
<div class="wrapper_small">
<?php 
foreach($blocks_content as $block){
    get_template_part("templates-parts/intro",null,array(
        "title" => $block["block_title"],
        "content" => $block["block_text"],
        "list" => !empty($block["block_list"]) ? $block["block_list"] : []
    ));
}
?>
</div>
</section>
<?php
get_footer();
?>