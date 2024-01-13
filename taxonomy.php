<?php get_header(); ?>

<?php 
    // champs ACF
    $mission = get_post_meta($post->ID, 'mission', true);
?>

<div class="taxonomy">
    <div class="taxonomy__carres">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="taxonomy__item">
            <a href="<?php the_permalink(); ?>">
                <h2 class="titre-page-taxo"><?php the_title(); ?></h2>
                <div class="taxonomy__content">
                    <?php if ($mission) {
                        echo '<p class="projet__mission"> ' . $mission . '</p>';
                    } ?>
                </div>
                <div class="taxo-photo__images">
                                            <?php the_post_thumbnail('medium', array('class' => 'taxo-image')); ?>
                    </a>
                </div>

             
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>



<?php get_footer(); ?>
