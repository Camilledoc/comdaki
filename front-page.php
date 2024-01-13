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
            <p>À travers mon logo et mon nom, je mets en lumière deux éléments clés qui guident mon parcours professionnel : <strong>la communication et l'attachement à mon territoire</strong>. Mes voyages m'ont permis de réaliser la richesse de chacune des cultures, c’est pourquoi mon ambition est de <strong>contribuer au rayonnement de l’excellence locale</strong> et à son dynamisme. 
Mon engagement se concrétise par <strong>un accompagnement dédié aux artisans, entrepreneurs, entreprises et associations</strong>, les soutenant dans leur démarche pour se faire connaître et valoriser leurs atouts.
Consciente des défis environnementaux qui touchent tous les secteurs, notamment le domaine numérique, j'adopte des pratiques visant à <strong>réduire l'impact de mon activité et à favoriser la collaboration avec des prestataires locaux</strong>.
</p>
            
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

        <div id="arrow" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up-long"></i>
    </div>
        

    </div>
</section>
<?php get_footer(); ?>