<?php
//header
get_header();

$fields=get_fields(get_the_ID());
$colored_heading=$fields["colored_heading"];
$blocks_content=$fields["blocks_content"];



echo "<pre>" . var_dump($fields) . "</pre>";

?>


<div style="background-color:<?php echo $colored_heading["background_color"]?>">
    <h1>
        <?php echo $colored_heading["title"];?>
    </h1>
</div>


    <?php 
     foreach($blocks_content as $block){
        echo "<h2>".$block["block_title"]."</h2>";
        echo $block["block_content"];

        echo "<ul>";
        foreach($block["block_list"] as $list_item){
            echo  "<li>".$list_item["list_text"]."</li>";
        }
        echo"</ul>";
        echo "<hr>";
     }  
       
     
     
     ?>
