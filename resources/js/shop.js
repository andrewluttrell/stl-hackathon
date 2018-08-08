var playing = undefined;

document.onclick = function functionName(eve) {
    var target = eve.target;

    if (target.className == "plarerVidShop") {
        document.getElementById("productInfoPopupWindow").style.display = "block";
        target.play();
        playing = target;
    } else if (target.id == "closePopupShopWindow") {
        target.parentElement.style.display = "none";
        playing.pause();
    }
}
