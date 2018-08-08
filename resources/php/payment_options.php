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
$paymentTypes = array( "Cash", "Credit Card", "Loan" );
?>
<html>
  <head>
    <link rel="stylesheet" href="../css/main.css"/>
  </head>
<body>
  Payment Options
  <table width=414px class="paymentOptions">
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
    <tr class="totalRow">
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

<?php foreach ( $paymentTypes as $paymentType ) { ?>
  <div style="width:414px;">
    <h2 style="color:white; background-color: rgba(17, 118, 181, 1); height: 30px; padding-top: 10px;"><?= $paymentType ?> Option</h2>
    <div>
      Cost of Item: $<?= $cost ?><br />
      Sales Tax: $<?= $salesTax ?><br />
      <?php if( $paymentType == "Credit Card" ) { ?>
      Interest: $<?= $ccInterest ?><br />
      Total Cost: $<?= $totalCost_cc ?><br />
      <?php } else if ( $paymentType == "Loan" ) { ?>
      Interest: $<?= $loanInterest ?><br />
      Total Cost: $<?= $totalCost_loan ?><br />
      <?php } else { ?>
      Total Cost: $<?= $totalCost_cash ?><br />
      <?php } ?>
    </div>
  </div>
<?php } ?>
</body>
