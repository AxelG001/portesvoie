<?php
//header
get_header();

$fields=get_fields(get_the_ID());
$colored_heading=$fields["colored_heading"];
$blocks_content=$fields["blocks_content"];



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
        echo "<div class='block'>";
        echo "<h2>".$block["block_title"]."</h2>";
        echo $block["block_content"];

        if( !empty($block["block_list"]) && count($block["block_list"])){
                echo "<ul>";
         foreach($block["block_list"] as $list_item){
              echo  "<li>".$list_item["list_text"]."</li>";
            }
            echo"</ul>";
        }
        echo "</div>";
     echo "<hr>";
     }  
       
     
     
     ?>
</div>
     
     </div>
</section>
<?php
get_footer();
?>