import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { CreateUserComponent } from './create-user/create-user.component';
import { FormsModule } from '@angular/forms';

import { RouterModule, Routes } from '@angular/router';

const appRoutes: Routes = [
  { path: 'create-user',
    component: CreateUserComponent,
    data: { title: 'Create User' }
  }
];


@NgModule({
  declarations: [
    AppComponent,
    CreateUserComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(
      appRoutes
    ),
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
