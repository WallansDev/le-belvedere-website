window.onload = function () {
    var imgs = ["./assets/img/acceuil2.png","./assets/img/acceuil3.png","./assets/img/acceuil1.png"],
        image = document.getElementById("main-image"),
        index = 0;
    function changeSrc () {
        image.src= imgs[(index++)%imgs.length];
    };
    cooldown = setInterval(changeSrc, 5000);
};