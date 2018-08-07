<?php
require "db.php"
function createUser($USER, $PASSWD) {
    console_log( $USER );
    console_log( $PASSWD );

    insertNewUser($USER, $PASSWD);
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

$user="";
$passwd="";
// Determin action
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["user"], $_POST["passwd"])) {
      createUser($_POST["user"], $_POST["passwd"]);
    } else {
      echo "<p>". "User:" . $_POST["userName"] .
             " Passwd:" . $_POST["passwdVal"] .
             "</p>";
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
