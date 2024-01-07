<?php get_header(); ?> 

<div class="hero">
    <div class="hero__bg">
    </div>
    <div class="hero__content">
        <h1 class="hero__title">Freelance graphiste et webdesigner en Aveyron </h1>
        <div class="hero__logo">
            <img src="<?php echo get_template_directory_uri() . '\assets\images\LOGO.webp'; ?>" alt="logo Comdaki freelance webdesigner graphiste">
        </div>
        <h4 class="hero__subtitle">Communication locale et responsable</h4>
        <div class="hero__button">
            <a href="">
                <button id="contact" type="button">
                    Me contacter  
                </button>
            </a>
        </div>
    </div>
</div>

<div class="prestations">
    <h6>prestations<span class="point">.</span></h6>
    <div class="prestations__carres">
    <div class="prestations__carre">
            <h2>Identité visuelle</h2>
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div class="prestations__carre">
            <h2>Webdesign et création de site internet</h2>
            <div class="i-horizontal">
            <i class="fa-solid fa-mobile-screen-button"></i>
            <i class="fa-solid fa-display"></i>
            </div>
        </div>
        <div class="prestations__carre">
            <h2>Formation</h2>
            <i class="fa-solid fa-users-gear"></i>
        </div>
        <div class="prestations__carre">
            <h2>Conseils en communication</h2>
            <i class="fa-regular fa-comments"></i>
        </div>
    </div>
    <div class="prestations__button">
            <a href="">
                <button id="prestations-button" type="button">
                    En savoir + 
                </button>
            </a>
        </div>
</div>

<div class="portefolio">
    <div class="cercle-conteneur-porte">
    <img class="cercle" src="<?php echo get_template_directory_uri() . '\assets\images\cercle.webp'; ?>" alt="vallon en pointillé">    
    </div>

    <h6>portefolio<span class="point">.</span></h6>
    <div class="portefolio_catalogue">
    <?php $projetCatalogue = comdaki_request_projet(); 
    if ($projetCatalogue) {
        foreach ($projetCatalogue as $projet) {
            echo $projet;
        }
    } else {
        echo 'Aucune photo trouvée.';
    }
    ?>
    </div>


    <div class="portefolio__button">
            <a href="">
                <button id="portefolio-button" type="button">
                    Voir tous les projets 
                </button>
            </a>
    </div>
</div>

<div class="a-propos">
    <h6>à propos<span class="point">.</span></h6>
    <div class="a-propos__content">
        <div class="vague-conteneur-a-propos">
            <img class="vague" src="<?php echo get_template_directory_uri() . '\assets\images\vague.webp'; ?>" alt="vallon en pointillé">    
        </div>
            <div class="a-propos__texte">
            <p>Camille Tromp, freelance graphiste et webdesigner</p>
            <p>À travers mon logo et mon nom, je mets en avant deux éléments clés qui guident mon parcours : la communication et l'attachement à mon territoire. Je relève le défi de me lancer à mon compte pour contribuer au rayonnement et au développement de ma région en accompagnant les artisans, entrepreneurs, entreprises, associations d'ici et d'ailleurs pour rayonner et faire connaître leurs valeurs. Consciente des enjeux environnementaux qui concernent tous les corps de métier, notamment le numérique, j'applique des techniques pour limiter l'impact de mon activité et faire travailler des prestataires locaux. </p>
            <div class="a-propos__button">
                    <a href="">
                        <button id="a-propos_button" type="button">
                            Découvrez ma vision 
                        </button>
                    </a>
            </div>    
        </div>
    <div class="a-propos__photo">
    <img src="<?php echo get_template_directory_uri() . '\assets\images\CTromp.webp'; ?>" alt="portrait Camille Tromp Graphiste Webdesigner">
    </div>
</div>
</div>
<?php get_footer(); ?>