<?php

function loginUser($USER, $PASSWD) {
    if (checkDB($USER, $PASSWD) == true) {
        session_start();  // mmmmmmmm...
        echo "<p>User found.<p>";
    } else {
        echo "<p>User not found or password incorrect.<p>";
    }

}


// Determin action
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["userName"], $_POST["passwdVal"])) {
        loginUser($_POST["userName"], $_POST["passwdVal"]);
    } else {
        echo "<p>". "User:" . $_POST["userName"] .
             " Passwd:" . $_POST["passwdVal"] .
             "</p>";
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
