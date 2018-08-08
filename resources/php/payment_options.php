<?php
$productName= "Apple iPhone 8+";
$cost = 799.99;
$interestRate = 16.99;
$loanRate = 5;
$salesTax = 64.24;
$ccInterest = 254.01;
$loanInterest = 68.24;
$totalCost_cash = $cost + $salesTax;
$totalCost_cc =  $cost + $salesTax + $ccInterest;
$totalCost_loan = $cost + $salesTax + $loanInterest;
?>
<html>
  <head>
    <link rel="stylesheet" href="resources/css/main.css"/>
  </head>
<body>
  Payment Options
  <table width=414px name="paymentOptions">
    <tr class="paymentHeaders">
      <th width=125px height=50px;><?= $productName ?></th>
      <th width=80px>Cash</th>
      <th width=80px>Credit</th>
      <th width=80px>Loan</th>
    </tr>
    <tr>
      <td>Cost of Item</td>
      <td>$<?= $cost ?></td>
      <td>$<?= $cost ?></td>
      <td>$<?= $cost ?></td>
    </tr>
    <tr>
      <td>Sales Tax</td>
      <td>$<?= $salesTax ?></td>
      <td>$<?= $salesTax ?></td>
      <td>$<?= $salesTax ?></td>
    </tr>
    <tr>
      <td>Interest</td>
      <td></td>
      <td>$<?= $ccInterest ?></td>
      <td>$<?= $loanInterest ?></td>
    </tr>
    <tr>
      <td>Total Cost</td>
      <td>$<?= $totalCost_cash ?></td>
      <td>$<?= $totalCost_cc ?></td>
      <td>$<?= $totalCost_loan ?></td>
    </tr>
    <tr>
      <td>Terms and Special Conditions</td>
      <td></td>
      <td>36 month loan @ $30.00 per month. Annual interest rate of <?= $interestRate ?>%</td>
      <td>31 month loan @ $30.00 per month. Annual interest rate of <?= $loanRate ?>%.</td>
    </tr>
  </table>
</body>
