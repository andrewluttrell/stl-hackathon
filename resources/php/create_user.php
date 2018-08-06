<?php

public function createUser($USER, $EMAIL, $PASSWD) {
    echo "User: " . $USER .
         "\nEmail: " . $EMAIL .
         "\nPassword: " . $PASSWD;
}

// Determin action
if( isset($_POST['user']),
    isset($_POST['email']),
    isset($_POST['passwd'])) {
        createUser($_POST["user"], $_POST["email"], $_POST["passwd"]);
} else {
    echo "<h2>Error! Illegal Access Attempt!</h2>";
}

?>
