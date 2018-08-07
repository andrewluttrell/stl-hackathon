<?php

include("user.php");

class myDB extends SQLite3 {
  function __construct() {
    $this->open('../db/idos');
  }
}
function getDB() {
  $db = new myDB();
  return $db;
}

function insertNewUser($user) {
  $db = getDB();
  $statement = $db->prepare('SELECT MAX(id) from shop_user');
  $result = $statement->execute();
  $id = 0;
  while($row = $result->fetchArray()) {
    $id = $row["MAX(id)"] + 1;
  }

  $sql = "INSERT INTO shop_user (id, name, pw, interest_rate, minimum_monthly, loan_rate, lawn, babysit, payoff) " .
         "VALUES ($id, \"$user->name\", \"$user->pass\", $user->interest_rate, $user->min_monthly, $user->loan_rate, $user->lawn, $user->babysit, $user->payoff)";
  if( $db->exec($sql) ){
    echo "New user successfully created.";
  } else {
    echo "something broke. <br>" . $db->error;
  }
}

function checkUser($user, $pass) {
  $db = getDB();
  $statement = $db->prepare('SELECT * FROM shop_user WHERE name=:name AND pass=:pass');
  $statement->bindValue(':name', $user);
  $statement->bindValue(':pass', $pass);
  $result = $statement->execute();

  while( $row = $result->fetchArray() ) {
    $user = new stdClass();
    $user->id = $row["id"];
    $user->name = $row["name"];
    $user->pass = $row["pass"];
    $user->interest_rate = $row["interest_rate"];
    $user->min_monthly = $row["minimum_monthly"];
    $user->loan_rate = $row["loan_rate"];
    $user->lawn = $row["lawn"];
    $user->babysit = $row["babysit"];
    $user->payoff = $row["payoff"];

    return $user;
  }
  if($result->fetchArray() == 0) {
    echo "No user found with those credentials.";
  }
}

?>
