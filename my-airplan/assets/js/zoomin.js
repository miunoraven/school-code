let imageElement = document.getElementById("map");


imageElement.addEventListener("mousemove", function (event) {
    
    let x = event.offsetX;
    let y = event.offsetY;
    
    let relx = (x / event.target.width) * 100;
    let rely = (y / event.target.height) * 100;
    
    imageElement.style["transform-origin"] = `${relx}% ${rely}%`;
});

function changePicture(picture){
    imageElement.src = "assets/images/" + picture;
}

