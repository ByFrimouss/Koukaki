<?php

get_header();
?>

    <main id="primary" class="site-main">

         <!-- Rajout de l'image en fallback + vidéo-->

    <section class="banner">
        <img class="banner__background" src="/images/banner.png" alt="Arrière-plan orangé fleurs et chats">
        <video class="banner__video" width="1440" autoplay="autoplay" muted="" loop="infinite">
            <source src="https://course.oc-static.com/projects/D%C3%A9veloppeur+Web/DWP+IW_P9+Studio+d'animation/Studio+Koukaki-vide%CC%81o+header+sans+son+(1).mp4"
            type="video/mp4">
        </video>
    <img class="banner__logo" src="<?php echo get_theme_file_uri() . '/images/logo.png'; ?>"
      alt="Logo fleurs d'oranger & chats errants">
    </section>
        <section id="#story" class="story section">
            <h2 class="section-titre">L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
           

            <?php get_template_part('/template-parts/caroussel'); ?>

            <article id="place">

                <img src="<?php echo get_theme_file_uri() . '/images/Studio_Koukaki-image_place.png'; ?>"
                    alt="arrière plan nuage montagne">

                <img class="place--big_cloud" src="<?php echo get_theme_file_uri() . '/images/big_cloud.png'; ?>"
                    alt="Gros nuage qui passe">
                <img class="place--little_cloud" src="<?php echo get_theme_file_uri() . '/images/little_cloud.png'; ?>" alt="Petit nuage qui passe">
      
                <div>
                    <h3> <span class="section-titre">Le Lieu </span></h3> <br>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="section">
            <h2 class="section-titre">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
            
            <!-- SECTION NOMINATION -->

            <?php get_template_part( 'template-parts/nomination-festival' ); ?>    
       

    </main><!-- #main -->

<?php
get_footer();