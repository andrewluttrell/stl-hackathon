<?php

// CHEAT sheet
// https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html#php-rds-create
//
// will be using -->  SQL Server – PDO_SQLSRV
  //
  //
  // RDS_HOSTNAME – The hostname of the DB instance.
  //
  // Amazon RDS console label – Endpoint (this is the hostname)
  //
  // RDS_PORT – The port on which the DB instance accepts connections. The default value varies among DB engines.
  //
  // Amazon RDS console label – Port
  //
  // RDS_DB_NAME – The database name, ebdb.
  //
  // Amazon RDS console label – DB Name
  //
  // RDS_USERNAME – The user name that you configured for your database.
  //
  // Amazon RDS console label – Username
  //
  // RDS_PASSWORD – The password that you configured for your database.

//
$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];

$dsn = "sqlsrv:Server={$dbhost},{$dbport};Database={$dbname}";
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];

function getDBConnection() {
  $connection = new PDO($dsn, $username, $password);

  return $connection;
}

function insertNewUser($user, $pass) {
  $connection = getDBConnection();
  $sql = "INSERT INTO shop_users (user_name, password) VALUES ( $user,$pass)";
  $result = $connection->query($sql);
}

?>
