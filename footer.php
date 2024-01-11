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
    <!-- Modale contact -->
    <?php get_template_part('templates/modale-contact'); ?>
</footer>
<?php wp_footer() ?>

</body>
</html>
