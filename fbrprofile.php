<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FBR_Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="fbrprofile.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <?php

    $username = 'root';
    $password = '';
    $db = 'rahaish';

    $var_value = $_REQUEST['varname'];
    //connecting database
    $con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");
    //query
    $sql = "SELECT user_name,user_email,user_phone,user_CNIC 
from users NATURAL JOIN fbr_officers where user_id=$var_value;";

    //result of query
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");

    $row = mysqli_fetch_array($result);


    $user_name = $row['user_name'];
    $user_phone = $row['user_phone'];
    $user_CNIC = $row['user_CNIC'];
    $user_email = $row['user_email'];

    ?>
    <div class="fbrprofile">
        <!-- displaying corresponding php variables with headings -->
        <div class="backgroundrectangle"></div>
        <div class="heading">FBR Officer Profile</div>
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
        <div class="logowhilteredirect"></div>

        <a class="signinredirect" href="signin.php">Sign Out</a>
        <form action="filers.php"> <button>
                <div class="filers">
                    <div class="filersbox"></div>
                    <!-- Show filers Button -->
                    <div class="filerstext">Show Filers</div>
                </div>
            </button></form>
        <div class="nonfilers">
            <form action="non_filers.php"> <button> <svg preserveAspectRatio="none" viewBox="-3.75 -3.75 299.5 86.5" class="nonfilersbox">
                        <path d="M 18 0 L 274 0 C 283.9411315917969 0 292 8.058874130249023 292 18 L 292 61 C 292 70.94112396240234 283.9411315917969 79 274 79 L 18 79 C 8.058874130249023 79 0 70.94112396240234 0 61 L 0 18 C 0 8.058874130249023 8.058874130249023 0 18 0 Z" />
                    </svg>
                    <!-- Show Non filers Button -->
                    <div class="nonfilerstext">Show Non-Filers</div>
                </button></form>
        </div>
        <div class="untitled"></div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>


</body>

</html>