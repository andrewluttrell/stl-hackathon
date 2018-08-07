<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User Home</title>
        <title>#IdoS Login</title>
        <link rel="stylesheet" href="../css/base.css"/>
        <link rel="stylesheet" href="../css/main.css"/>
    </head>
    <body>

    <?php
        if(!isset($_COOKIE["userDat"])) {
            echo "<center><h2>Not logged in!</h2></center>";
            echo "<center><h3>PLease login <a href='../../index.html'>HERE</a></h3></center>";
        } else {
            echo "<div id='master-container' class='background-gradient-purple'>";
            echo "<img clas='owlSmall' src='../images/owl.svg'/>";
            echo "<center><p>Choose what you want to do...</p></center>";
            echo "<div class='userHomeRow1 hoverColor' onclick=\"location.href='shop.php'\"><img clas='owlSmall' src='../images/cam.svg'/><span>Let's go shopping!</span></div>";
            echo "<div class='userHomeRow2 hoverColor'><img clas='owlSmall' src='../images/glass.svg'/><span>Search for your goods.</span></div>";
            echo "<div class='userHomeRow3 hoverColor'><img clas='owlSmall' src='../images/book.svg'/><span>Definitions for all those strange terms.</span></div>" ;
            echo "</div>";
        }
    ?>


    </body>
</html>
