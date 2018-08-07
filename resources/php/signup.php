<?php
include("db.php");
function createUser($USER, $PASSWD) {
    $user = getNewUser();
    $user->name = $USER;
    $user->pass = $PASSWD;

    insertNewUser($user);
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
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
