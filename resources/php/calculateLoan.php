<?php

require 'interest.php';
require 'price.php';

function calculateTotalCost_setPayAmt($price, $tax, $interestRate, $payAmt) {
  $principal = calculatePriceWithTax($price, $tax);

  $totalCost = 0;
  $numMonths = 0;

  while( $principal > 0 ) {
    $numMonths++;
    if( $principal > $payAmt ) {
      $interest = calculateInterest($principal, $interestRate);
      $principal = $principal + $interest - $payAmt;
      $totalCost = $totalCost + $payAmt;
    } else {
      $totalCost = $totalCost + $principal;
      $principal = 0;
    }
  }

  return $totalCost;
}

function calculateTotalCost_setNumMonths($price, $tax, $interestRate, $numMonths) {
  $principal = calculatePriceWithTax($price, $tax);

  $totalCost = 0;
  $payAmt = $principal / $numMonths;
  $monthsPaid = 0;

  while( $numMonths > $monthsPaid ) {
    $monthsPaid++;
    if ( $principal > $payAmt ) {
      $interest = calculateInterest($principal, $interestRate);
      $principal = $principal + $interest - $payAmt;
      $totalCost = $totalCost + $payAmt;
    } else {
      $totalCost = $totalCost + $principal;
      $principal = 0;
    }
  }

}
?>
