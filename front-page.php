<?php
    //header
    get_header();

    $fields = get_fields(get_the_ID());
    $colored_heading = $fields["colored_heading"];
    $blocks_content = $fields["blocks_content"];
    $stickers_content = $fields["stickers_content"];
    $you_are = $fields["you_are"];
    $our_members = $fields["our_members"];
    $the_news = $fields["the_news"];
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

<div class="group-stickers">
    <?php foreach($stickers_content as $sticker): ?>
            <div class="sticker-body" style="background-color: <?php echo($sticker['sticker_background_color']); ?>;">
                <div class="sticker-content">
                    <img src="<?php echo($sticker["sticker_icon"]); ?>" alt="icon du sticker">
                    <p class="title">
                        <?php echo($sticker["sticker_title"]); ?>
                    </p>
                    <div class="sticker-element" style="background-color:<?php echo($sticker["sticker_element_color"]); ?>;">
                    </div>
                    <p>
                        <?php echo $sticker["sticker_text"]; ?>
                    </p>
                </div>
            </div>
    <?php endforeach; ?>
</div>

<div class=cards-block>
    <?php
        get_template_part("templates-parts/intro",null,array(
            "title" => $you_are["title"]
        )); 
    ?>
    <div class="cards">
        <?php foreach($you_are["cards"] as $card): ?>
            <div class="card-body <?php echo($card['color'])?>">
                
                <div class="card-image">
                    <img src="<?php echo($card["image"]); ?>" alt="icon du sticker">
                </div>  
                <div class="card-content">
                    
                        <h3 class="title">
                            <span class="<?php echo($card['color'])?>"><?php echo($card["title"]); ?></span>
                        </h3>
                            <?php echo $card["text"]; ?>


                            <?php
                            get_template_part("templates-parts/button",null,array(
                                "link" => $card["link"],
                                "title" => "Découvrir",
                                "color"=> $card["color"]
                            )); 
                            ?>
                </div>
            </div>
        <?php endforeach; ?>
</div>


</article>
<section class="members-partenaires wrapper-big">
<?php
     get_template_part("templates-parts/intro",null,array(
        "title" => $our_members["main_title"]
    )); 
    ?>
</section>
<div class="nos-members">
    <?php foreach($our_members["members"] as $member): ?>
        <div class="member-body" style="background-color: <?php echo($member['background_color']); ?>;">
            <div class="member-content">
                <div class="member-content-container">
                    <div class="member-content-container-image">
                        <img src="<?php echo($member["image"]); ?>" alt="image du membre">
                    </div>
                    <div class="member-content-container-text">
                        <p class="member-text">
                            <?php echo($member["text"]); ?>
                        </p>
                    </div>
                </div>  
                <div class="member-content-button">
                    <?php
                        get_template_part("templates-parts/button",null,array(
                            "link" => $member["link"],
                            "title" => "Visiter le site",
                            "color"=> $member["text_color"]
                    )); ?>      
                </div>
            
            </div>
        </div>
    <?php endforeach; ?>
</div>




<div class="news-block ">
    <?php
        get_template_part("templates-parts/intro",null,array(
            "title" => $the_news["main_title"]
        )); 
    ?>
    <div class="news">
        <?php foreach($the_news["news"] as $new): ?>
            <div class="new-body <?php echo($new['color'])?>">
                
                <div class="new-image">
                    <img src="<?php echo($new["image"]); ?>" alt="image de l'actualité">
                </div>  
                <div class="new-content">
                    <h3 class="new-title">
                        <span class="<?php echo($new['color'])?>"><?php echo($new["title"]); ?></span>
                    </h3>
                    <p class="new-text">
                        <?php echo $new["text"]; ?>
                    </p>
                    <div class="new-content-button">
                        <?php
                            get_template_part("templates-parts/button",null,array(
                                "link" => $new["link"],
                                "title" => "Vers Linkedin",
                                "color"=> $new["color"]
                            )); 
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</section>


<?php
//footer
get_footer();
    ?>