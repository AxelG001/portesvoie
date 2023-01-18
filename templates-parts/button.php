<?php 
     


     if (!empty($args) && (!empty($args["link"]))) {
        $color = !empty($args['color']) ? $args['color'] : '';
        echo "<a href=".$args["link"]." class='button ".$color." ' >";

?>

<svg width="214" height="104" viewBox="0 0 214 104" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M213.069 46.1818C211.265 -7.51269 105.858 -6.06748 53.8975 12.3982C-30.2037 42.2857 4.73458 80.6786 27.7447 92.0185C79.3371 117.445 214.873 99.8763 213.069 46.1818Z" fill="black"/>
</svg>


<?php
            if (!empty($args['title'])) {
                echo "<span>".$args['title']."</span>";
            }



        echo "</a>";

     }

     ?>