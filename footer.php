<footer>
    <div class="menu-footer">
        <nav>
            <?php /*affiche mon menu footer */
            wp_nav_menu([
                'theme_location' => 'footer'
            ]); 
            ?>
        </nav>
    </div>
    <div class="copy">
        <p>| © Comdaki 2024</p>
    </div>
</footer>
<?php wp_footer() ?>

</body>
</html>
