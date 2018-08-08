var playing = undefined;

document.onclick = function functionName(eve) {
    var elm = eve.target;

    if (elm.className == "plarerVidShop") {
        document.getElementById("productInfoPopupWindow").style.display = "block";
        elm.play();
        playing = elm;
        var data = "searchQuery=" + elm.getAttribute("name");
        getShopData(data);
    } else if (elm.id == "closePopupShopWindow") {
        elm.parentElement.style.display = "none";
        playing.pause();
    }
}

function getShopData(lookupData) {
   var xhttp = new XMLHttpRequest();

   xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
            processData(this.responseText);
       }
   };

   xhttp.open("POST", "getShopData.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send(lookupData);
}

function processData(data) {
    var xButton = document.getElementById("closePopupShopWindow");
console.log(data);
    document.getElementById("productInfoPopupWindow").innerHtml = data;
}
