<?php
// Inialize session
session_start();

// Include database connection settings
include('db.php');

$user = getNewUser();

function loginUser($USER, $PASSWD) {
    if (checkDB($USER, $PASSWD) == true) {
        $cookie_name = "userDat";
        $cookie_value = $USER;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Location:user_home.php");
        exit();
    } else {
        echo "<link rel=\"stylesheet\" href=\"../css/base.css\"/>";
        echo "<link rel=\"stylesheet\" href=\"../css/main.css\"/>";
        // <link rel="shortcut icon" type="image/png" href="favicon.png"/>
        echo "<div id='master-container' class='background-gradient-purple'>";
        echo "<img clas='owlSmall' src='../images/owl.svg'/>";
        echo "<center><p>User not found or password incorrect.</p></center>";
        echo "<div class='userHomeRow2 hoverColor' onclick=\"location.href='../../index.html'\"><span>Try again.</span></div>" ;
        echo "</div>";

    }

}

function checkDB($name, $pass) {
   $user = checkUser($name, $pass);
   if ($user) {
       if( $user->name != '' ) {
           return true;
       } else {
           return false;
       }
   } else {
       return false;
   }
}

// Determin action
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["userLogin"], $_POST["userPasswd"])) {
        loginUser($_POST["userLogin"], $_POST["userPasswd"]);
    } else {
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}

?>
