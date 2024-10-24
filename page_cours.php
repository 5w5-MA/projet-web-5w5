<?php

/**
 * Template Name: cours
 */
?>

<?php get_header(); ?>
<main class="pageCours">
    <section class="coursPrincipale">
        <h1>Liste de cours</h1>
        <div class="imgCours"></div>
        <div class="txt"></div>
    </section>
    <section class="coursMenu">
        <input type="checkbox" id="chkBtnSession1">
        <input type="checkbox" id="chkBtnSession2">
        <input type="checkbox" id="chkBtnSession3">
        <input type="checkbox" id="chkBtnSession4">
        <input type="checkbox" id="chkBtnSession5">
        <input type="checkbox" id="chkBtnSession6">
        <label for="chkBtnSession1" class="btnSession1">Session1</label>
        <label for="chkBtnSession2" class="btnSession2">Session2</label>
        <label for="chkBtnSession3" class="btnSession3">Session3</label>
        <label for="chkBtnSession4" class="btnSession4">Session4</label>
        <label for="chkBtnSession5" class="btnSession5">Session5</label>
        <label for="chkBtnSession6" class="btnSession6">Session6</label>
    </section>
    <section class="listeCours"></section>
</main>
<?= get_footer(); ?>
<!-- <script>
    document
        .getElementById("chkBurger")
        .addEventListener("change", function() {
            if (this.checked) {
                document.body.classList.add("pasDeScroll");
            } else {
                document.body.classList.remove("pasDeScroll");
            }
        });
</script> -->