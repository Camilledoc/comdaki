<?php get_header();?>
<h1 class="titre-page">Portefolio<span class="point">.</span></h1>

<div class="filtres">
        <div class="filtres__categorie">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="post">
                <?php
                $terms = get_terms('categorie'); // Récupérer tous les termes de la taxonomie personnalisée

                if ($terms && !is_wp_error($terms)) {
                    echo '<select class="taxonomy-categorie_item" name="taxonomy-categorie" id="taxonomy-categorie">';
                    echo '<option value="">CATÉGORIES</option>';
                    foreach ($terms as $term) {
                        echo '<option class="taxonomy-categorie_items" value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                    }
                    echo '</select>';
                }
                ?>
            </form>
        </div>
        <div class="filtres__date">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="post">
            <?php
            echo '<select class="taxonomy-order_item" name="order" id="order">';
            echo '<option>TRIER PAR DATE</option>';
            if ($selectedOrder && !is_wp_error($selectedOrder)) {
                echo '<option class="taxonomy-order_items" value="DESC">Du plus récent au plus ancien</option>';
                echo '<option class="taxonomy-order_items" value="ASC">Du plus ancien au plus récent</option>';
            } else {
                echo '<option class="taxonomy-order_items" value="DESC">Du plus récent au plus ancien</option>';
                echo '<option class="taxonomy-order_items" value="ASC">Du plus ancien au plus récent</option>';
            }
            echo '</select>';
            ?>
        </form>
    </div>
</div>

<div id="portefolio-archive-projet" class="portefolio_catalogue">
<?php 
        $projetCatalogue = comdaki_request_projet_portofolio(); 
        if ($projetCatalogue) {
            foreach ($projetCatalogue as $projet) {
                echo $projet;
            }
        } else {
            echo 'Aucune photo trouvée.';
        }
        ?>
<div id="arrow" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up-long"></i>
    </div>

</div>

<?php get_footer();?>