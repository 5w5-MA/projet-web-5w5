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
        <div class="btnSession1Wrap">
            <label for="chkBtnSession1" class="btnSession1">Session1</label>
        </div>
        <div class="btnSession2Wrap">
            <label for="chkBtnSession2" class="btnSession2">Session2</label>
        </div>
        <div class="btnSession3Wrap">
            <label for="chkBtnSession3" class="btnSession3">Session3</label>
        </div>
        <div class="btnSession4Wrap">
            <label for="chkBtnSession4" class="btnSession4">Session4</label>
        </div>
        <div class="btnSession5Wrap">
            <label for="chkBtnSession5" class="btnSession5">Session5</label>
        </div>
        <div class="btnSession6Wrap">
            <label for="chkBtnSession6" class="btnSession6">Session6</label>
        </div>
    </section>
    <section class="listeCours"></section>
</main>
<?= get_footer(); ?>
<script>
    let btns = [{
            btn: document.getElementsByClassName("btnSession1")[0],
            wrap: document.getElementsByClassName("btnSession1Wrap")[0],
            chk: document.getElementById("chkBtnSession1")
        },
        {
            btn: document.getElementsByClassName("btnSession2")[0],
            wrap: document.getElementsByClassName("btnSession2Wrap")[0],
            chk: document.getElementById("chkBtnSession2")
        },
        {
            btn: document.getElementsByClassName("btnSession3")[0],
            wrap: document.getElementsByClassName("btnSession3Wrap")[0],
            chk: document.getElementById("chkBtnSession3")
        },
        {
            btn: document.getElementsByClassName("btnSession4")[0],
            wrap: document.getElementsByClassName("btnSession4Wrap")[0],
            chk: document.getElementById("chkBtnSession4")
        },
        {
            btn: document.getElementsByClassName("btnSession5")[0],
            wrap: document.getElementsByClassName("btnSession5Wrap")[0],
            chk: document.getElementById("chkBtnSession5")
        },
        {
            btn: document.getElementsByClassName("btnSession6")[0],
            wrap: document.getElementsByClassName("btnSession6Wrap")[0],
            chk: document.getElementById("chkBtnSession6")
        }
    ];

    function gestionChangementCheckbox(changeChk) {
        btns.forEach(({
            btn,
            wrap,
            chk
        }) => {
            if (chk === changeChk) {
                if (chk.checked) {
                    btn.classList.add("actif");
                    wrap.classList.add("wrapActif");
                } else {
                    btn.classList.remove("actif");
                    wrap.classList.remove("wrapActif");
                }
            } else {
                chk.checked = false;
                btn.classList.remove("actif");
                wrap.classList.remove("wrapActif");
            }
        });
    }

    btns.forEach(({
        chk
    }) => {
        chk.addEventListener("change", function() {
            gestionChangementCheckbox(this);
        });
    });
</script>