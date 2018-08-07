<?php
// Inialize session
session_start();

// Include database connection settings
include('database.php');
include('userPageTemplate.php');


function loginUser($USER, $PASSWD) {
    if (checkDB($USER, $PASSWD) == true) {
        $_SESSION['userDat'] = $_POST['username'];
        // generate a randome id
        // save to db with expire timeframe included
        // load user page template
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
