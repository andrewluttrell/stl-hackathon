<?php

function checkDB($SESSIONCOOKIE) {
    // mo logic here
}

function checkSessionCookie($SESSIONCOOKIE) {
    if ($SESSIONCOOKIE == checkDB($SESSIONCOOKIE)) {
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
