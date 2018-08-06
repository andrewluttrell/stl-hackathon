<?php

function createUser($USER, $EMAIL, $PASSWD) {
    echo "<p>User: " . $USER .
         "Email: " . $EMAIL .
         "Password: " . $PASSWD . "<p>";
}

// Determin action
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["userName"], $_POST["emailName"], $_POST["passwdVal"])) {
        createUser($_POST["user"], $_POST["email"], $_POST["passwd"]);
    } else {
        echo "<p>". "User:" . $_POST["userName"] .
             " Email: " . $_POST["emailName"] .
             " Passwd:" . $_POST["passwdVal"] .
             "</p>";
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
