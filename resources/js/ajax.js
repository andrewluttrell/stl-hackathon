// function submitNewUser() {
//     var userName  = document.getElementsByName("user")[0].value;
//     var emailName = document.getElementsByName("email")[0].value;
//     var passName  = document.getElementsByName("passwd")[0].value;
//
//     data = "userName=" + userName + "&emailName=" + emailName + "&passwdVal=" + passName;
//     doAjax("resources/php/create_user.php", data)
// }
//
//
// function doAjax(processURI, formData) {
//    var xhttp = new XMLHttpRequest();
//
//    xhttp.onreadystatechange = function() {
//        if (this.readyState == 4 && this.status == 200) {
//            processPostData(this.responseText);
//        }
//    };
//
//    xhttp.open("POST", processURI, true);
//    xhttp.send(formData);
// }
// $(function(){
//   $('form').on('submit', function(e) {
//     e.preventDefault();
//
//     $.ajax({
//       type: 'post',
//       url:  '../php/create_user.php',
//       data: $('form').serialize(),
//       success: function() {
//         alert("Form was submitted!");
//       }
//     });
//   });
// });
