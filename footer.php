<footer>
    <div class="menu-footer">
        <nav>
            <?php /*affiche mon menu footer */
            wp_nav_menu([
                'theme_location' => 'footer'
            ]); 
            ?>
            <p>Tous droits réservés</p>
        </nav>
    </div>
</footer>
<?php wp_footer() ?>

</body>
</html>