function submitNewUser() {
    var userName  = document.getElementsByName("user")[0].value;
    var emailName = document.getElementsByName("email")[0].value;
    var passName  = document.getElementsByName("passwd")[0].value;

    data = "user=" + userName + "&email=" + emailName + "&passwd=" + passName;
    doAjax("resources/php/create_user.php", data)
}


function doAjax(formURI, formData) {
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
           processPostData(this.responseText);
       }
   };
   xhttp.open("POST", formURI, true);
   xhttp.send(formData);
}
