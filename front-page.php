<?php get_header(); ?> 

<section class="hero">
    <div class="hero__bg">
    </div>
    <div class="hero__content">
        <h1 class="hero__title">Freelance graphiste et webdesigner en Aveyron </h1>
        <div class="hero__logo">
            <img src="<?php echo get_template_directory_uri() . '\assets\images\LOGO.webp'; ?>" alt="logo Comdaki freelance webdesigner graphiste">
        </div>
        <h2 class="hero__subtitle">Communication locale et responsable</h2>
        <div class="hero__button">
            <a href="<?php echo home_url('/contact/'); ?>">
                <button id="contact" type="button">
                    Me contacter  
                </button>
            </a>
        </div>
    </div>
</section>

<section class="prestations">
    <h3>prestations<span class="point">.</span></h3>
    <div class="prestations__carres">
        <div class="prestations__carre">
            <h4>Identité visuelle</h4>
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div class="prestations__carre">
            <h4>Webdesign et création de site internet</h4>
            <div class="i-horizontal">
            <i class="fa-solid fa-mobile-screen-button"></i>
            <i class="fa-solid fa-display"></i>
            </div>
        </div>
        <div class="prestations__carre">
            <h4>Formation</h4>
            <i class="fa-solid fa-users-gear"></i>
        </div>
        <div class="prestations__carre">
            <h4>Conseils en communication</h4>
            <i class="fa-regular fa-comments"></i>
        </div>
    </div>
    <div class="prestations__button">
            <a href="<?php echo home_url('/prestations/'); ?>">
                <button id="prestations-button" type="button">
                    En savoir + 
                </button>
            </a>
        </div>
</section>

<section class="portefolio">
    <h3>portefolio<span class="point">.</span></h3>
    <div class="portefolio_catalogue">
        <?php 
        $projetCatalogue = comdaki_request_projet(); 
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
        <a href="<?php echo home_url('/projet/'); ?>">
            <button id="portefolio-button" type="button">
                Voir tous les projets 
            </button>
        </a>
    </div>
</section>

<section class="a-propos">
    <h3>à propos<span class="point">.</span></h3>
    <div class="a-propos__content">
        <div class="a-propos__texte">
            <p class="surligne">Camille Tromp, freelance graphiste et webdesigner</p>
            <p>À travers mon logo et mon nom, je mets en avant deux éléments clés qui guident mon parcours : la communication et l'attachement à mon territoire. Je relève le défi de me lancer à mon compte pour contribuer au rayonnement et au développement de ma région en accompagnant les artisans, entrepreneurs, entreprises, associations d'ici et d'ailleurs pour rayonner et faire connaître leurs valeurs. Consciente des enjeux environnementaux qui concernent tous les corps de métier, notamment le numérique, j'applique des techniques pour limiter l'impact de mon activité et faire travailler des prestataires locaux. </p>
            
            <div class="a-propos__button">
                <a href="<?php echo home_url('/a-propos/'); ?>">
                    <button id="a-propos_button" type="button">
                        Mieux me connaître 
                    </button>
                </a>
            </div>    
        </div>

        <div class="a-propos__photo">
            <img src="<?php echo get_template_directory_uri() . '\assets\images\CTromp.webp'; ?>" alt="portrait Camille Tromp Graphiste Webdesigner">  
            <div class="vallon">
                <div class="vallon-ligne"></div>
                <div class="vallon-ligne"></div>
                <div class="vallon-ligne"></div>
                <div class="vallon-ligne"></div>
            </div>
        </div>

        

    </div>
</section>
<?php get_footer(); ?>