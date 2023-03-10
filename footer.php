
<div class="footer_contact">
    <div class="footer_contact_text">
        Pour nous aidez, contactez-nous:
    </div>

    <?php
         get_template_part("templates-parts/button",null,array(
        "link" => get_page_link(ID_PAGE_CONTACT),
        "title" => "Nous contactez"
        )); 
    ?>
</div>
<footer>
    <div class="footer_wrapper wrapper_big">
    <div class ="colonne">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_white.png">
    </div>
     
    <div class ="colonne">
        <p class="colonne-title">Suivez nous</p>
        <a href="#">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M44.9656 1.59033H5.02812C5.01562 1.59033 5.00156 1.59033 4.98594 1.59033C3.1125 1.59033 1.59219 3.08116 1.57031 4.92923V44.631C1.59219 46.4806 3.1125 47.973 4.98594 47.973C5.00156 47.973 5.01563 47.973 5.03125 47.973H44.9609C44.9734 47.973 44.9891 47.973 45.0047 47.973C46.8797 47.973 48.4031 46.4837 48.4328 44.6341V44.631V4.93232C48.4031 3.08116 46.8797 1.59033 45.0031 1.59033C44.9875 1.59033 44.9734 1.59033 44.9578 1.59033H44.9656ZM15.4687 41.1158H8.50937V18.9838H15.4687V41.1158ZM11.9906 15.9558C9.76406 15.9558 7.96094 14.1696 7.96094 11.9674C7.96094 9.76514 9.76562 7.97893 11.9906 7.97893C14.2156 7.97893 16.0203 9.76359 16.0203 11.9658C16.0203 11.9674 16.0203 11.9689 16.0203 11.972C16.0203 14.1727 14.2172 15.9573 11.9938 15.9573C11.9922 15.9573 11.9906 15.9573 11.9891 15.9573L11.9906 15.9558ZM41.4938 41.1158H34.5547V30.3537C34.5547 27.7865 34.5016 24.4847 30.9391 24.4847C27.3203 24.4847 26.7688 27.2777 26.7688 30.165V41.1174H19.8297V18.9854H26.4953V22.0026H26.5859C27.8797 19.8452 30.2203 18.4225 32.8969 18.4225C32.9922 18.4225 33.0859 18.424 33.1797 18.4271H33.1656C40.1969 18.4271 41.4969 23.0078 41.4969 28.9696V41.1174L41.4938 41.1158Z" fill="white"/>
</svg>
        </a>
    </div>
    
    <div class ="colonne"> 
    <p class="colonne-title">Suivez nous</p>
        <?php wp_nav_menu(array('menu' => 'footer_nav')); ?>
    </div>
    </div>

</footer>






<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php  wp_footer();?>
</body>
</html>