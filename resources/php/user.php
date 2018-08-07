<?php

function getNewUser() {
  $user = new stdClass();
  $user->name = "";
  $user->pass = "";
  $user->interest_rate = 16.99;
  $user->min_monthly = 30;
  $user->loan_rate = 5;
  $user->lawn = 25;
  $user->babysit = 15;
  $user->payoff = 6;

  return $user;
}

?>
