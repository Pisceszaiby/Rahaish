<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PropertyDetails</title>

    <link rel="stylesheet" href="propertydetails.css">
</head>

<body>
    <?PHP
    //property info redirected to this page
    $Property = $_POST['Property'];
    $username = 'root';
    $password = '';
    $db = 'rahaish';
    //connection with database
    $con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");

    if ($Property == NULL) { //for empty property variable
        echo "No Property To Be Displayed";
    } else {
        $sql1 = "SELECT area_unit, user_name AS Owner
from property_info natural join users
where property_id=$Property;";
        $sql2 = "SELECT user_name,user_email,user_phone,price,property_desc,user_id
from users u natural join (agents join (temp_property_info natural join temp_sell_buy_property) 
using (agent_id)) 
where property_id=$Property;";








        $result1 = mysqli_query($con, $sql1) or die("<br>Bad query:<br> $sql1");
        $row1 = mysqli_fetch_array($result1);
        $result2 = mysqli_query($con, $sql2) or die("<br>Bad query:<br> $sql2");
        $row2 = mysqli_fetch_array($result2);
        //results
        echo $row1["area_unit"] . "<br>" . $row1["Owner"] . "<br>" . $row2["user_name"] . "<br>" .
            $row2["user_email"] . "<br>" . $row2["user_phone"] . "<br>";
        $id = $row2["user_id"];
        $desc = $row2["property_desc"];
    }

    ?>
    <!-- displaying php variables  -->
    <div class="propertydetails">
        <div class="backgroundrectangle"></div>
        <div class="heading">Property Details</div>
        <div class="namecomponent">
            <div class="area">Area</div>
            <div class="areaunit"><?= $row1["area_unit"] ?></div>
        </div>
        <div class="emailcomponent">
            <div class="owner">Owner:</div>
            <div class="usernameo"><?= $row1["Owner"]  ?></div>
        </div>
        <div class="phonecomponent">
            <div class="agent">Agent: </div>
            <div class="username"><?= $row2["user_name"]  ?></div>
        </div>
        <div class="cniccomponent">
            <div class="agentContact">Agent Contact:</div>
            <div class="userphone"><?= $row2["user_phone"] ?></div>
        </div>
        <div class="socnamecomponent">
            <div class="price">Price:</div>
            <div class="pricepro"><?= $row2["price"] ?></div>
        </div>
        <div class="description">Description: </div>
        <div class="bought">
            <div class="email"><?= $row2["user_email"] ?></div>
            <div class="agentEmail">Agent Email: </div>
        </div>
        <div class="xd7cae9c7"> رہائش </div>
        <div class="jjj"><?= $row2["property_desc"] ?></div>

        <div>
            <form method="post" action="agentProfile.php">
                <!-- Agent Profile Button -->

                <button type="submit" name="varname" value=<?= $id ?> class=" filers ">
                    <div class="filersbox"></div>
                    <div class="filerstext">Agent Profile</div>
                </button>
            </form>
        </div>
    </div>
    </div>



</body>

</html>