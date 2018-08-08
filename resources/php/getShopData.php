<?php
// include 'db.php';


function searchDB($QUERY_VALUE) {
    echo "<h2>" . $QUERY_VALUE . "</h2>";
}


// Determin action
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if( isset($_POST["searchQuery"])) {
      searchDB($_POST["searchQuery"]);
    } else {
        echo "<h2>Error! Illegal Access Attempt!</h2>";
    }
}
?>
