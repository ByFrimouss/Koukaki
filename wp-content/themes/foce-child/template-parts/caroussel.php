<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

<article id="characters">
    <h3 class="section-titre">Les personnages</h3>
    <div class="swiper-container"> <!-- Ajout de la classe swiper-container -->
        <div class="swiper-wrapper"> <!-- Ajout de la classe swiper-wrapper -->
            <div class="swiper-slide"> <!-- Ajout de la classe swiper-slide -->
                <figure>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    ?>
                </figure>
            </div>
            <?php
            while ( $characters_query->have_posts() ) {
                $characters_query->the_post();
                ?>
                <div class="swiper-slide"> <!-- Ajout de la classe swiper-slide -->
                    <figure>
                        <?php
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo '</figcaption>';
                        ?>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </div>
</article>