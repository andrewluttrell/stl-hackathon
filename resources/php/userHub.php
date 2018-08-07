<?php
// Inialize session
session_start();

// Include database connection settings
include('database.php');


function checkSessionCookie($SESSIONCOOKIE) {
    if ($SESSIONCOOKIE == checkLoginDB($SESSIONCOOKIE)) {
        echo $SESSIONCOOKIE;
    } else {
        // Prompt a login here
        echo "<p>Need to do login action...<p>";
    }
}

// Determin action
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["sessionCookie"])) {
        checkSessionCookie($_POST["sessionCookie"]);
    } else {
        echo "<p>Cokie: " . $_POST["sessionCookie"] . "</p>";
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
