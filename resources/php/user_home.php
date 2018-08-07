<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User Home</title>
    </head>
    <body>

    <?php
        if(!isset($_COOKIE["userDat"])) {
            echo "<center><h2>Not logged in!</h2></center>";
            echo "<center><h3>PLease login <a href='../../login.html'>HERE</a></h3></center>";
        } else {
            echo "Logged in!!";
        }
    ?>


    </body>
</html>
