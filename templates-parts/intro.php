<?php 
     
     if (!empty($args)) {
        echo "<div class='block'>";

            if (!empty($args['title'])) {
                echo "<h2>".$args['title']."</h2>";
            }

            if (!empty($args['content'])) {
                echo $args["content"];
            }

            if( !empty($args["list"]) && count($args["list"])){
                echo "<ul>";
                foreach($args["list"] as $list_item){
                    echo  "<li>".$list_item["list_text"]."</li>";
                }
                echo"</ul>";
            }

        echo "</div>";

     }

     ?>