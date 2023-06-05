<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Society</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="society.css">
    <link rel="stylesheet" href="styles.css">

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

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>