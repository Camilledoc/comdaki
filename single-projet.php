<?php get_header(); ?>

<?php 
// champs ACF
$mission = get_post_meta($post->ID, 'mission', true);
$client = get_post_meta($post->ID, 'client', true);
$imagesupp = get_post_meta($post->ID, 'imagesupp', true);
$siteweb = get_post_meta($post->ID, 'site', true);
?>

<div class="single-projet">
    <div class="single-projet__container">
        <div class="single-projet__info">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="titre-page-porto"><?php the_title(); ?></h2>

                <div class="projet-photo__images">
                    <?php the_post_thumbnail('medium_large', array('class' => 'single-image')); ?>
                
                <?php
                if ($imagesupp) {
                    $image_url = wp_get_attachment_image_src($imagesupp, 'medium_large');
                    if ($image_url) {
                        echo '<img class="single-image" src="' . esc_url($image_url[0]) . '" alt="Photo">';
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

                <?php if ($siteweb) {
                echo '<a class="projet-photo__site" href="' . $siteweb . '" target="_blank"><i class="fa-solid fa-arrow-right-long"></i>Voir le site web</a>';
                } ?>

                <div class="projet-photo__details">
                <?php
                // Récupérer les termes de la taxonomie pour le CPT actuel
                $taxoCategorie = get_the_terms(get_the_ID(), 'categorie');
                if ($taxoCategorie && !is_wp_error($taxoCategorie)) {
                    echo '<p class="meta-projet">Catégorie : ';
                    foreach ($taxoCategorie as $taxoCategorie) {
                        echo '<a href="' . get_term_link($taxoCategorie) . '">' . $taxoCategorie->name . '</a> ';
                    }
                    echo '</p>';
                }
                ?>

                <?php if ($client) {
                    echo '<p class="meta-projet"> Client(e) : ' . $client . '</p>';
                } ?>

                <?php
                $year = get_the_date('Y');
                echo '<p class="meta-projet"> Date : ' . $year . '</p>';
                ?>

           

            <?php endwhile; endif; ?>
            </div>
            <div class="navigation-projet">
                <div class="navigation-projet__gauche"><?php previous_post_link('%link','<i class="fa-solid fa-arrow-left-long"></i> Projet précédent'); ?> </div>   
                <div class="navigation-projet__droite"><?php next_post_link('%link','Projet suivant <i class="fa-solid fa-arrow-right-long"></i>'); ?> </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
