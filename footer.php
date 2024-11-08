<footer>
  <section class="footerGauche">
    <div class="credit">
      <h2>Credit</h2>
      <p>Annabelle Lacombe Cardenas</p>
      <p>Alek Crépeau</p>
      <p>Max-J Rosalbert</p>
      <p>Christopher Simeus</p>
      <p>Marguerite Demontigny</p>
    </div>
    <div class="maisonneuve">
      <h2>Maisonneuve</h2>
      <p>3800, rue Sherbrook est</p>
      <p>Montréal, Qc, H1X 2A2</p>
      <p>Maisonneuve@gmail.com</p>
    </div>
    <div class="liens">
      <h2>Liens</h2>
      <p>Accueil</p>
    </div>
  </section>
  <section class="footerDroite">
    <div class="reseaux">
      <h2>Suivez-nous</h2>
      <div>
        <button id="boutonCouleur">changer couleur</button>
      </div>
    </div>
  </section>
  <section class="footerBas">Maisonneuve</section>
</footer>

<?php wp_footer(); ?>

</body>
<script>
  document
    .getElementById("chkBurger")
    .addEventListener("change", function() {
      if (this.checked) {
        document.body.classList.add("pasDeScroll");
      } else {
        document.body.classList.remove("pasDeScroll");
      }
    });

  // code pour plugin

  const couleurBase = {
    bleu: "#13243c",
    blanc: "#e8e8e8",
    texte: "black",
    dropShadow: "rgba(255, 255, 255, 0.25)"
  };

  const couleur2 = {
    bleu: "white",
    blanc: "#13243c",
    texte: "white",
    dropShadow: "rgba(0, 0, 0, 0.25)"
  };

  function lesCouleursEnregistrer() {
    const bleuEnregistrer = localStorage.getItem("bleu");
    const blancEnregistrer = localStorage.getItem("blanc");
    const texteEnregistrer = localStorage.getItem("texte");
    const dropShadowEnregistrer = localStorage.getItem("dropShadow");

    return {
      bleu: bleuEnregistrer || couleurBase.bleu,
      blanc: blancEnregistrer || couleurBase.blanc,
      texte: texteEnregistrer || couleurBase.texte,
      dropShadow: dropShadowEnregistrer || couleurBase.dropShadow
    };
  }

  function utiliserCouleur(bleu, blanc, texte, dropShadow) {
    document.documentElement.style.setProperty("--bleu", bleu);
    document.documentElement.style.setProperty("--blanc", blanc);
    document.documentElement.style.setProperty("--texte", texte);
    document.documentElement.style.setProperty("--drop-shadow", dropShadow);
  }

  const {
    bleu,
    blanc,
    texte,
    dropShadow
  } = lesCouleursEnregistrer();
  utiliserCouleur(bleu, blanc, texte, dropShadow);

  const btnCouleur = document.getElementById("boutonCouleur");

  let etatCouleur = bleu === couleurBase.bleu;


  btnCouleur.addEventListener("click", () => {
    if (etatCouleur) {
      utiliserCouleur(couleur2.bleu, couleur2.blanc, couleur2.texte, couleur2.dropShadow);
      localStorage.setItem("bleu", couleur2.bleu);
      localStorage.setItem("blanc", couleur2.blanc);
      localStorage.setItem("texte", couleur2.texte);
      localStorage.setItem("dropShadow", couleur2.dropShadow);
    } else {
      utiliserCouleur(couleurBase.bleu, couleurBase.blanc, couleurBase.texte, couleurBase.dropShadow);
      localStorage.setItem("bleu", couleurBase.bleu);
      localStorage.setItem("blanc", couleurBase.blanc);
      localStorage.setItem("texte", couleurBase.texte);
      localStorage.setItem("dropShadow", couleurBase.dropShadow);
    }

    etatCouleur = !etatCouleur;
  })
</script>

</html>