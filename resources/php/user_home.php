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

    <?php if(!isset($_COOKIE["userDat"])) { ?>
        <div id='master-container' class='background-gradient-purple'>
          <center><h2>Not logged in!</h2></center>
          <center><h3>PLease login <a href='../../index.html'>HERE</a></h3></center>
        </div>
    <?php } else { ?>
        <div id='master-container' class='background-gradient-purple'>
          <img class='owlSmall' src='../images/owl.svg'/>
          <center><p class="homeText">Choose what you want to do...</p></center>
          <ul>
            <li class='userHomeRow userHomeRow1 hoverColor' onclick="location.href='shop.php'"><img class='userHomeIcon' src='../images/cam.svg'/><div class="userHomeText">Let's go shopping!</div></li>
            <li class='userHomeRow userHomeRow2 hoverColor'><img class='userHomeIcon' src='../images/glass.svg'/><div class="userHomeText">Search for your goods.</div></li>
            <li class='userHomeRow userHomeRow3 hoverColor'><img class='userHomeIcon' src='../images/book.svg'/><div class="userHomeText">Definitions for all those strange terms.</div></li>
          </ul>
          <ul id="navBar">
            <li><a href="user_home.php"><img id="homeButton" class="navBarIcon" src='../images/home.svg' /></a></li>
            <li><a href="back.php"><img id="backButton" class="navBarIcon" src='../images/back.png' /></a></li>
            <li><a href="user_settings.php"><img id="settingButton" class="navBarIcon" src='../images/gear.svg' /></a></li>
          </ul>
    <?php } ?>


    </body>
</html>
