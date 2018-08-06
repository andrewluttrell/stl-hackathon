function submitNewUser() {

    data = "user=&email=";
    doAjax("resources/php/create_user.php", data)
}


function doAjax(formURI, formData) {
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
               // do something with the returned data
           }
       };
       xhttp.open("POST", formURI, true);
       xhttp.send(formData);
   }
