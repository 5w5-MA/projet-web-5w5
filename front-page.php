<?php
get_header();
?>
<!-- /////////////////Page D'ACCUEIL  ////////////////// -->
<main>
    <div class="txtMain">
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <br>
        <h2><?php echo get_bloginfo('description'); ?></h2>
    </div>

    <div class="img">image</div>
    <div class="boutonCours">
        <div class="btn1"></div>
        <a href="<?php echo site_url('/liste-de-cours'); ?>">
            <div class="btn2">cours</div>
        </a>
        <div class="btn3"></div>
        <div class="btn4"></div>
        <div class="btn5"></div>
        <div class="btn6"></div>
    </div>
    <div class="infoCegep">
        <div class="divPolygone">
            <div class="div1">location: 7767656 rue khdsksak</div>
        </div>
    </div>
    <div class="infoLogiciel">
        <div class="divPolygone">
            <div class="div1">img img img</div>
        </div>
    </div>
    <div class="description">
        <div class="div1">
            À propos
        </div>
        <div class="div2">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="diagramme">
        <div class="divPolygone">
            <div class="div1">hgfg</div>
            <div class="div2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam
            </div>
        </div>
    </div>

    <div class="titreProfile">
        <div class="divPolygone">
            <div class="div1">Le profile d'un étudiant</div>
        </div>
    </div>
    <div class="titreProfileVide">
        <div class="divPolygone">
            <div class="div1">asdsaf</div>
        </div>
    </div>
    <div class="logiciels">
        <div class="div1">
            Logiciels et languages
        </div>
        <div class="div2">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
            invidunt ut labore et dolore magna aliquyam
        </div>
    </div>
    <div class="logicielsVide">
        <div class="divPolygone">
            <div class="div1">hgfg</div>
            <div class="div2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam
            </div>
        </div>
    </div>

    <div class="photo">
        <div> image</div>
        <div>image</div>
        <div>image</div>
        <div>image</div>
    </div>

    <?php get_template_part("componants-php/barreBasPage"); ?>

</main>

<?php get_footer(); ?>