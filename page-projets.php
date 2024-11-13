<?php get_header(); ?>

<main class="MaxProjetMain">

    <section class="SectionArcade">
        <div class="TitreSectionArcade">
            <div class="titreSection">
                <h2>Arcade</h2>
            </div>
        </div>

        <?php
        $arcadePost = new WP_Query(array(
            'posts_per_page' => 6,
            'category_name' => 'arcade'
        )); ?>

        <section class="ListeArcade">
            <?php
            while ($arcadePost->have_posts()) {
                $arcadePost->the_post();
            ?>
                <section class="jeu">
                    <div>
                        <?php the_title(); ?>
                    </div>
                </section>
            <?php }; ?>
        </section>

        <section class="SectionProjet">
            <section class="Rangee1">
                <div class="FiltreSectionProjet">
                    <div class="titreSection">
                        <h2>Projet</h2>
                    </div>
                </div>
                </div>

                <div class="TitreSectionProjet">
                    <div class="Partie1">
                        <h2>Filtre</h2>
                        <div class="boutonFiltreProjet"> - </div>
                    </div>
                </div>
            </section>

            <div class="menuDeroulant">
                <div class="boutonFiltreProjet">design</div>
                <div class="boutonFiltreProjet">programmation</div>
                <div class="boutonFiltreProjet">3</div>
                <div class="boutonFiltreProjet">4</div>
                <div class="boutonFiltreProjet">5</div>
            </div>

            <div class="Rangee2">
                <?php
                $postDesign = new WP_Query(array(
                    'category_name' => 'design'
                ));

                while ($postDesign->have_posts()) {
                    $postDesign->the_post();
                ?>
                    <div class="design">
                        <?php the_title(); ?>
                    </div>
                <?
                }

                $postDesign = new WP_Query(array(
                    'category_name' => 'programmation'
                ));

                while ($postDesign->have_posts()) {
                    $postDesign->the_post();
                ?>
                    <div class="programmation">
                        <?php the_title(); ?>
                    </div>
                <?
                }
                ?>
                <div class="galerieProjets">
                    <img src="" alt="deux mots">
                </div>
                <div class="galerieProjets">
                    <img src="" alt="je teste les grandeur">
                </div>
                <div class="galerieProjets">
                    <img src="" alt="images marchent pas">
                </div>
                <div class="galerieProjets">
                    <img src="" alt="image">
                </div>
                <div class="galerieProjets">
                    <img src="" alt="il est sensé y avoir une image">
                </div>
                <div class="galerieProjets">
                    <img src="" alt="">
                </div>
                <!-- <div class="div2"></div>
                <div class="div3"></div>
                <div class="div4"></div>
                <div class="div5"></div>
                <div class="div6"></div> -->
            </div>
        </section>
</main>
<?php get_footer(); ?>