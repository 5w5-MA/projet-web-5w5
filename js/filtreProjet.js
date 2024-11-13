let bouton = document.querySelector('.boutonFiltreProjet');
let menuDeroulant = document.querySelector('.menuDeroulant');
let lesBouton = document.querySelectorAll('.boutonFiltreProjet');
let enfants = document.querySelectorAll('.Rangee2 div');

let visible = false;

lesBouton.forEach(element => {
    element.addEventListener('click', () => {
        if (element.innerHTML != "programmation" && element.innerHTML != 'design') {
            enfants.forEach(enfant => {
                enfant.style.display = 'flex';
            })
        }
        else {
            enfants.forEach(enfant => {
                if (enfant.className != element.innerHTML) {
                    enfant.style.display = 'none';
                }
                else {
                    enfant.style.display = 'flex';
                }
            })
        }
    })
});

bouton.addEventListener('click', () => {
    if (!visible) {
        menuDeroulant.style.height = 'auto';
        visible = true;
    } else {
        menuDeroulant.style.height = '0px';
        visible = false;
    }

})
