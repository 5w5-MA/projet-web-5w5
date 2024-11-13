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
                <div class="FiltreSectionProjet">
                    <div class="Partie1">
                        <h2>Projet</h2>
                    </div>
                </div>
                <div class="Partie2"></div>
                <div class="Partie3"></div>
                </div>

                <div class="TitreSectionProjet">
                    <div class="Partie1">
                        <h2>Filtre</h2>
                        <div class="boutonMenuProjet"> - </div>
                    </div>
                    <div class="Partie2"></div>
                    <div class="Partie3"></div>
                </div>
            </section>

            <div class="menuDeroulant">
                <div class="boutonFiltreProjet">Rafraichir</div>
                <div class="boutonFiltreProjet">Design</div>
                <div class="boutonFiltreProjet">Programmation</div>
                <div class="boutonFiltreProjet">Jeu</div>
                <div class="boutonFiltreProjet">Modélisation</div>
            </div>

            <div class="Rangee2">
                <?php
                    $postDesign = new WP_Query(array(
                        'category_name' => 'design',
                    ));
                $postDesign = new WP_Query(array(
                    'category_name' => 'design'
                ));

                    while($postDesign ->have_posts()){
                        $postDesign ->the_post();
                        ?>
                        <div class="design">
                            <?php the_title();?>
                        </div>
                        <?
                    }

                $postProgrammation = new WP_Query(array(
                    'category_name' => 'programmation'
                ));

                    while($postProgrammation ->have_posts()){
                        $postProgrammation ->the_post();
                        ?>
                        <div class="programmation">
                            <?php the_title();?>
                        </div>
                        <?
                    }
                    $postJeu = new WP_Query(array(
                        'category_name' => 'jeu'
                    ));

                    while($postJeu ->have_posts()){
                        $postJeu ->the_post();
                        ?>
                        <div class="jeu">
                            <?php the_title();?>
                        </div>
                        <?
                    }
                    $postModelisation = new WP_Query(array(
                        'category_name' => 'modelisation'
                    ));

                    while($postModelisation ->have_posts()){
                        $postModelisation ->the_post();
                        ?>
                        <div class="modélisation">
                            <?php the_title();?>
                        </div>
                        <?
                    }
                ?>   

                while ($postDesign->have_posts()) {
                    $postDesign->the_post();
                ?>
                    <div class="programmation">
                        <?php the_title(); ?>
                    </div>
                <?
                }
                ?>
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