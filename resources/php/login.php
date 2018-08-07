<?php
// Inialize session
session_start();

// Include database connection settings
include('db.php');
include('user.php');

$user = getNewUser();

function loginUser($USER, $PASSWD) {
    if (checkDB($USER, $PASSWD) == true) {
        $cookie_name = "userDat";
        $cookie_value = $USER;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Location:user_home.php");
        exit();
    } else {
        echo "<p>User not found or password incorrect.<p>";
    }

}

function checkDB($name, $pass) {
   $user = checkUser($name, $pass);
   if( $user->name != '' ) {
     return true;
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
