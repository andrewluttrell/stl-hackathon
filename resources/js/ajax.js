function checkAccess() {
    var cookie = getCookie("userDat");
    if (cookie != "") {
        var data   = "sessionCookie=" + cookie;
        doAjax("resources/php/userHub.php", data)
    } else {
        doAjax("resources/php/login.php", data)
    }
}

function doAjax(processURI, formData) {
   var xhttp = new XMLHttpRequest();

   xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
           processPostData(this.responseText);
       }
   };

   xhttp.open("POST", processURI, true);
   xhttp.send(formData);
}
