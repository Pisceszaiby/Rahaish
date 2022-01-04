<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Society</title>

    <link rel="stylesheet" href="society.css">
</head>

<body>
    <?php

    $username = 'root';
    $password = '';
    $db = 'rahaish';

    $role_id = $_REQUEST['varname'];
    $con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");
//query
    $sql = "SELECT user_name,user_email,user_phone,user_CNIC,area,society_name,no_of_bought,no_of_rented,society_description
from users NATURAL JOIN (society_rep natural JOIN housing_society)
WHERE user_id=$role_id;";


    $result = mysqli_query($con, $sql) or die("Bad query: $sql");

    $row = mysqli_fetch_array($result);


    $user_name = $row['user_name'];
    $user_phone = $row['user_phone'];
    $user_CNIC = $row['user_CNIC'];
    $user_email = $row['user_email'];
    $area = $row['area'];
    $society_name = $row['society_name'];
    $no_of_bought = $row['no_of_bought'];
    $no_of_rented = $row['no_of_rented'];
    $society_description = $row['society_description'];
    //all the varibles from the results will be used in html 

    ?>
    <div class="society">
        <!-- php variables used to display info -->
        <div class="backgroundrectangle"></div>
        <div class="heading">Representative Profile</div>
        <div class="untitled"></div>
        <div class="namecomponent">
            <div class="name">Name:</div>
            <div class="username"><?= $user_name ?></div>
        </div>
        <div class="emailcomponent">
            <div class="emailId">Email ID:</div>
            <div class="useremail"><?= $user_email ?></div>
        </div>
        <div class="phonecomponent">
            <div class="contactNumber">Contact Number:</div>
            <div class="userphone"><?= $user_phone ?></div>
        </div>
        <div class="cniccomponent">
            <div class="cnicNumber">CNIC Number:</div>
            <div class="usercnic"><?= $user_CNIC ?></div>
        </div>
        <a href="signin.php" class="signinredirect">Sign out</a>

        <div class="socnamecomponent">
            <div class="societyName">Society Name</div>
            <div class="societyname"><?= $society_name ?></div>
        </div>
        <div class="areacomponent">
            <div class="area">Area:</div>
            <div class="areab2dbbb42"><?= $area ?></div>
        </div>
      
        <div class="bought">
            <div class="x0ce7625b"><?= $no_of_bought ?></div>
            <div class="numberOfBoughtProperties">Number of Bought Properties: </div>
        </div>
        <div class="rented">
            <div class="numberOfRentedProperties">Number of Rented Properties: </div>
            <div class="x0d905ba7"><?= $no_of_rented ?></div>
        </div>
        <div class="x1f553391"> رہائش </div>
    </div>



</body>

</html>