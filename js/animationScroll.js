

let lesImages = document.querySelectorAll(".imageVie");
console.log(lesImages)

window.addEventListener('scroll', ApparitionImg);

function ApparitionImg() {
    let bas = window.innerHeight / 3;
    console.log(bas);

    lesImages.forEach(img => {
        let hautImg = img.getBoundingClientRect().top;
        console.log(bas);
        if (hautImg < bas) {
            img.classList.add("apparitionImg");

        } else {
            img.classList.remove("apparitionImg");
        }

    });
}

