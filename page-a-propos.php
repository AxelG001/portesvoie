<?php
    //header
    get_header();

    $fields = get_fields(get_the_ID());
    $colored_heading = $fields["colored_heading"];
    $blocks_content = $fields["blocks_content"];
    $blocks_content_2 = $fields["blocks_content_2"];
    $members = $fields["members"];
    $blocks_content_3 = $fields["blocks_content_3"];
    $boxes = $fields["boxes"];
    $center_image=$fields["center_image"];
?>

<section class="main">
    <div class="heading-block" style="background-color:<?php echo $colored_heading["background_color"]?>">
        <div class="wrapper_big">
            <div class="heading-image">
                <img src="<?php echo $colored_heading["image_main"];?>" alt="lol">
            </div>
            <div class="heading-text">
                <h1 class="title-text" style="color:<?php echo $colored_heading["text_color"]?>">
                    <?php echo $colored_heading["title"];?>
                </h1>
                <h2>
                    <?php echo $colored_heading["text_main"];?>
                </h2>
            </div>
        </div>
    </div>



    <article class="wrapper_big">
        <?php   
            get_template_part("templates-parts/intro",null,array(
                "title" => $blocks_content["block_title"],
                "content" => $blocks_content["block_text"]
            ));
        ?>
        
        <div class="member-image">
            <img src="<?php echo $center_image["center_image"];?>">
        </div>  

        <?php   
            get_template_part("templates-parts/intro",null,array(
                "title" => $blocks_content_2["block_title"],    
                "content" => $blocks_content_2["block_text"]
            ));
        ?>

        <div class="members">
            <?php foreach($members as $member): ?>
                <div class="member-body">
                    <div class="member-image">
                        <img src="<?php echo $member["image"];?>">
                    </div>  
                    <div class="member-content">
                        <p class="member-title">
                            <?php echo($member["title"]);?>
                        </p>
                        <p>
                            <?php echo $member["text"]; ?>
                        </p>
                        <?php 
                        if (!empty($member['image'])) {
                            echo '<img src="'.$member['image'].'">';
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php       
            get_template_part("templates-parts/intro",null,array(
                "title" => $blocks_content_3["block_title"],
                "content" => $blocks_content_3["block_text"]
            ));
        ?>


        <div class="boxes">
            <?php foreach($boxes as $box): ?>
                <div class="box-body">
                    <div class="box-image">
                        <img src="<?php echo($box["image"]); ?>" alt="icones du block">
                    </div>  
                    <div class="box-content">
                        <p class="box-title">
                            <span class="<?php echo($box['color'])?>"><?php echo($box["title"]); ?></span>
                        </p>
                        <ul>
                            <?php foreach($box["line"] as $line): ?>
                                <li><?php echo $line["text"]; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php 
                        if (!empty($box['pdf_link'])) {
                            echo '<a href="'.$box['pdf_link'].'">Pour plus de précision, voir le PDF</a>';
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </article>
</section>




<?php
//footer
get_footer();
    ?>