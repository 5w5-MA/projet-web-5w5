<?php get_header(); ?>
    <main class="MaxProjetMain">

    <section class="SectionArcade">
            <div class="TitreSectionArcade">
                <div class="Partie1">
                    <h2>Arcade</h2>
                </div>
                <div class="Partie2"></div>
                <div class="Partie3"></div>
            </div>
        
        <?php
        $arcadePost = new WP_Query(array( 
            'posts_per_page'=> 6,
            'category_name' => 'arcade'
        )); ?>
        
        <section class="ListeArcade">
            <?php
            while($arcadePost ->have_posts()){
                $arcadePost ->the_post();
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
                <div class="FiltreSectionProjet"><div class="Partie1">
                    <h2>Projet</h2>
                </div>
                <div class="Partie2"></div>
                <div class="Partie3"></div></div>

                <div class="TitreSectionProjet">
                    <div class="Partie1">
                        <h2>Filtre</h2>
                    </div>
                    <div class="Partie2"></div>
                    <div class="Partie3"></div>
                </div>
            </section>

            <div class="Rangee2">
                <div class="div1"></div>
                <div class="div2"></div>
                <div class="div3"></div>
                <div class="div4"></div>
                <div class="div5"></div>
                <div class="div6"></div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>