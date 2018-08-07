<?php
include("db.php");
include("user.php");
// class Shop_user {
//   function Shop_user($user, $pass) {
//     $this->name = $user;
//     $this->pass = $pass;
//     $this->interest_rate = 16.99;
//     $this->min_monthly = 30;
//     $this->loan_rate = 5;
//     $this->lawn = 25;
//     $this->babysit = 15;
//     $this->payoff = 6;
//   }
// }
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
