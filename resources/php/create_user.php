<?php

function createUser($USER, $PASSWD) {
    console_log( $USER );
    console_log( $PASSWD );
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

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
$user="";
$passwd="";
// Determin action
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["user"], $_POST["passwd"])) {
      createUser($_POST["user"], $_POST["passwd"]);
    } else {
      echo "<p>". "User:" . $_POST["userName"] .
             " Passwd:" . $_POST["passwdVal"] .
             "</p>";
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
