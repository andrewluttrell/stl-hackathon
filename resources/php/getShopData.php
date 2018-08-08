<?php
// include 'db.php';


function searchDB($QUERY_VALUE) {
    if ($QUERY_VALUE == "phone_1") {
        echo '<div id="u893" class="text">
            <p style="font-size:16px;"><span style="font-family:\'Arial Bold\', \'Arial\';font-weight:700;">Product: Apple iPhone 8+</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">Manufacturer: Apple Inc.</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- 6.5" Retina Display</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- Dual 12 MP Camera</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- A11 Processor</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- 64 GB</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- Splash/Water Resistant</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- Carriers: AT&amp;T, Sprint, Verizon</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;"><br></span></p>
            <p style="font-size:18px;"><span style="font-family:\'Arial Bold\', \'Arial\';font-weight:700;">Cost: $799.99</span></p>
        </div>';
    } else if ($QUERY_VALUE == "phone_2") {
        echo '<div id="u893" class="text">
            <p style="font-size:16px;"><span style="font-family:\'Arial Bold\', \'Arial\';font-weight:700;">Product: Apple iPhone 7</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">Manufacturer: Apple Inc.</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- 7.5" Display</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- Dual 12 MP Camera</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- A11 Processor</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- 32 GB</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;">- Carriers: AT&amp;T, Verizon</span></p>
            <p style="font-size:16px;"><span style="font-family:\'Arial\';font-weight:400;"><br></span></p>
            <p style="font-size:18px;"><span style="font-family:\'Arial Bold\', \'Arial\';font-weight:700;">Cost: $699.99</span></p>
        </div>';
    }
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
