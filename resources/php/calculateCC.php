
<?php
require 'price.php';
require 'interest.php';

function calculateTotalCost($price, $tax, $creditCardRate, $minimumPmt) {
  $principal = calculatePricewithTax($price, $tax);
  $numMonths = 0;
  $totalCost = 0;

  while ($principal > 0) {
    $numMonths++;  
    if ($principal > $minimumPmt) {
      $interest = calculateInterest( $principal, $creditCardRate );
      $principal = $principal + $interest - $minimumPmt;
      $totalCost += $minimumPmt;
    } else {
      $totalCost += $principal;
      $principal = 0;
    }
  }

  return $totalCost;
}
?>
