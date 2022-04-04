const imgs = document.querySelectorAll("img");
console.log(imgs)

function imggs(eo) {
    for (let i = 0; i < imgs.length; i++) {
        imgs[i].setAttribute("load", "lazy");

    }
}

imggs()