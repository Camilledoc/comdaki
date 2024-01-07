<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() 
{
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/comdaki.css', array(), time() );
    wp_enqueue_script( 'script-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), time(), true );
}

/** menu principal */
function register_my_menu() 
{
    register_nav_menu('main-menu', 'Menu principal');
    register_nav_menu('footer', 'Pied de page');
}
add_action( 'after_setup_theme', 'register_my_menu' );

/** activation fonctionnalités WP */
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

/** requête projets portefolio page d'accueil */
function comdaki_request_projet(){
    $args = array (
        'post_type' => 'projet', 
        'posts_per_page' => 3, 
        'orderby' => 'date',
        'order' => 'DESC'
    ); 

    $query = new WP_Query($args);
    $projetCatalogue = [];

    if ($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            $title = get_the_title();
            $thumbnail_id = get_post_thumbnail_id(); 
            $image = wp_get_attachment_image_src($thumbnail_id, 'large'); 
            $url = get_permalink(); 
            $category = wp_get_post_terms(get_the_ID(), 'categorie', ['fields'=>'names']);
            $id = get_the_id();

            
             //utilisé sur la page d'accueil
             $projet_html = '<div class="projet">';
             $projet_html .= '<a href="' . esc_url($url) . '">';
             $projet_html .= '<div class="projet_thumbnail">';
             $projet_html .= '<img class="image-projet" src="' . esc_url($image[0]) . '" alt="Photo" />';
             $projet_html .= '</div>';
             $projet_html .= '<div class="projet_details">';
             $projet_html .= '<h5 class="projet_details_title">' . esc_html($title)  . '</h5>';
             if (!empty($category)) {
                if (isset($category[0]) && isset($category[1])) {
                    // Si les indices 0 et 1 existent, affiche les deux catégories
                    $projet_html .= '<p class="projet_details_cat">' . esc_html($category[0]) . ' • ' . esc_html($category[1]) . '</p>';
                } else if (isset($category[0])) {
                    // Si seulement l'indice 0 existe, affiche uniquement la catégorie 0
                    $projet_html .= '<p class="projet_details_cat">' . esc_html($category[0]) . '</p>';
                }
            }          
             $projet_html .= '<i class="fa-solid fa-arrow-right-long"></i>';
             $projet_html .= '</div>';
             $projet_html .= '</a>';
             $projet_html .= '</div>';

            // Ajoute le code HTML de la photo au tableau $photosCatalogue.
            $projetCatalogue[]=$projet_html; 
        }
    }
    
    wp_reset_postdata();
    if($_SERVER['REQUEST_METHOD']=='GET'){
        return $projetCatalogue;
     }
}

    /*if($query->have_posts()){
        while ($query->have_posts()){
        $query->the_post(); 
        $title = the_title();
        $thumbnail = get_post_thumbnail_id();  
        $image = wp_get_attachment_image_src($thumbnail, 'medium'); 
        $url = get_permalink();    
        $id = get_the_id();  
        $item = array(
            'img' => $image,
            'url' => $url,
            'id' => $id,
        );
        $response[] = $item;
    }
} else {
    $response = false; 
    $id = false;
}
wp_reset_postdata();
return $response;
}*/