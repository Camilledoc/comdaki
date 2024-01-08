<?php get_header(); ?>

<?php 
// champs ACF
$mission = get_post_meta($post->ID, 'mission', true);
$client = get_post_meta($post->ID, 'client', true);
$imagesupp = get_post_meta($post->ID, 'imagesupp', true);
?>

<div class="single-projet">
    <div class="single-projet__container">
        <div class="single-projet__info">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="titre-page"><?php the_title(); ?></h2>

                <?php
                // Récupérer les termes de la taxonomie pour le CPT actuel
                $taxoCategorie = get_the_terms(get_the_ID(), 'categorie');
                if ($taxoCategorie && !is_wp_error($taxoCategorie)) {
                    echo '<p class="description_photo">Catégorie : ';
                    foreach ($taxoCategorie as $taxoCategorie) {
                        echo '<a href="' . get_term_link($taxoCategorie) . '">' . $taxoCategorie->name . '</a> ';
                    }
                    echo '</p>';
                }
                ?>

                <div class="projet-photo__images">
                    <?php the_post_thumbnail('medium_large'); ?>
                
                <?php
                if ($imagesupp) {
                    $image_url = wp_get_attachment_image_src($imagesupp, 'full');
                    if ($image_url) {
                        echo '<img src="' . esc_url($image_url[0]) . '" alt="Photo">';
                    }
                }
                ?>
                </div>   

                <div class="projet-photo__content">
                    <?php if ($mission) {
                        echo '<p class="projet__mission"> ' . $mission . '</p>';
                    } ?>

                    <?php
                    $content = get_the_content();
                    echo '<p> ' . $content . '</p>';
                    ?>
                </div>

                <div class="projet-photo__details">
                <?php
                // Récupérer les termes de la taxonomie pour le CPT actuel
                $taxoCategorie = get_the_terms(get_the_ID(), 'categorie');
                if ($taxoCategorie && !is_wp_error($taxoCategorie)) {
                    echo '<p class="description_photo">Catégorie : ';
                    foreach ($taxoCategorie as $taxoCategorie) {
                        echo '<a href="' . get_term_link($taxoCategorie) . '">' . $taxoCategorie->name . '</a> ';
                    }
                    echo '</p>';
                }
                ?>

                <?php if ($client) {
                    echo '<p class="projet__client"> ' . $client . '</p>';
                } ?>

                <?php
                $year = get_the_date('Y');
                echo '<p class="description_photo"> Date : ' . $year . '</p>';
                ?>

            <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
