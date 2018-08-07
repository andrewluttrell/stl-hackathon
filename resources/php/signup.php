<?php
// Inialize session
session_start();

include("db.php");

function createUser($USER, $PASSWD) {
    $user = getNewUser();
    $user->name = $USER;
    $user->pass = $PASSWD;

    insertNewUser($user);

    $cookie_name = "userDat";
    $cookie_value = $USER;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    header("Location:user_home.php");
    exit();
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
    if( isset($_POST["userLogin"], $_POST["userPasswd"])) {
      createUser($_POST["userLogin"], $_POST["userPasswd"]);

    } else {
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
