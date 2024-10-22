<?php
    get_header();
?>

<main>
    <div class="txtMain">
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <br>
        <h2><?php echo get_bloginfo( 'description' ); ?></h2>
    </div>
    <div class="img">image</div>
    <div class="boutonCours">
        <div class="btn1"></div>
        <a href="<?php echo site_url('/liste-de-cours'); ?>"><div class="btn2">cours</div></a>
        <div class="btn3"></div>
        <div class="btn4"></div>
        <div class="btn5"></div>
        <div class="btn6"></div>
    </div>
    <div class="infoCegep">
        <div class="divPolygone">
            <div class="div1">location: 7767656 rue khdsksak</div>
            <div class="div2"></div>
        </div>
    </div>
    <div class="infoLogiciel">
        <div class="divPolygone">
            <div class="div1">img img img</div>
            <div class="div2"></div>
        </div>
    </div>
    <div class="description">
        <div>
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
    <div class="photo">
        <div>image</div>
        <div>image</div>
        <div>image</div>
        <div>image</div>
    </div>
    <div class="barreBasPage">
        <div class="div1"></div>
        <div class="div2"></div>
    </div>
</main>

<?php get_footer(); ?>