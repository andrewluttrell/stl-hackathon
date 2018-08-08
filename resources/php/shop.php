<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Let's go Shopping! #iDO$</title>
    <link rel="stylesheet" href="../css/base.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
  </head>
  <body>
      <div id="productInfoPopupWindow">
          <span id="closePopupShopWindow">X</span>
          <div id="dataWindow">

          </div>
      </div>

      <?php if(!isset($_COOKIE["userDat"])) { ?>
          <div id='master-container' class='background-gradient-purple'>
            <center><h2>Not logged in!</h2></center>
            <center><h3>PLease login <a href='../../index.html'>HERE</a></h3></center>
          </div>
      <?php } else { ?>
          <div id='master-container' class='background-gradient-purple'>
                  <video class="plarerVidShop" name="phone_1" width="100%" height="100%" poster="../vids/vid_thumbnails/phone_1.png">
                      <source src="../vids/phone_1.mp4" type="video/mp4">
                       Your browser does not support the video tag.
                   </video>
            <script src="/resources/js/shop.js" charset="utf-8"></script>
            <?php
                include("navbar.php");
                include('payment_options.php');
            ?>
      <?php } ?>
  </body>
</html>
