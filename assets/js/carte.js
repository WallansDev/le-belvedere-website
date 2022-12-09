
var box = document.getElementById('box');
var imagePlat = document.getElementById('thumbnail');
var ingredients = document.getElementById('ingredients-plat');

function getId(monId){
    box.style.display = 'block';
    imagePlat.src = "./assets/img/plats/"+ monId +".png";
    //ingredients.innerHTML = monId +"_ingr";
}

document.getElementById('delete-button').onclick = function() {
    box.style.display = 'none';
    location.href='./carte.php';

};