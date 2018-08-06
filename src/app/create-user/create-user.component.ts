import { Component, OnInit } from '@angular/core';
import { User } from '../user';

@Component({
  selector: 'app-create-user',
  template: `
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HackathonApp</title>
  <base href="/create-user">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>

<div>
  <label>
    User Name: <input type="text" name="user_name" [(ngModel)]="user.name" placeholder="Name" \>
  </label>
</div>
<div>
  <label>
    Password: <input type="password" name="password" [(ngModel)]="user.password" placeholder="Password" \>
  </label>
</div>
<div>
  <label>
    Credit Card Interest Rate: <input type="text" name="cc-interest" [(ngModel)]="user.ccinterest" placeholder="Credit Card Interest" \>
  </label>
</div>
<div>
  <label>
    Loan Interest Rate: <input type="text"  name="loan-interest" [(ngModel)]="user.loanrate" placeholder="Loan Rate" \>
  </label>
</div>
<div>
  <label>
    Savings Amount: <input type="text" name="savings" [(ngModel)]="user.savings" placeholder="Savings Amount" \>
  </label>
</div>

</body>
</html>

  `
})
  // templateUrl: './create-user.component.html',
  // styleUrls: ['./create-user.component.css']
export class CreateUserComponent implements OnInit {

  constructor() {
  }

  ngOnInit() {
  }

}
