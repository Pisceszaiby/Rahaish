<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FBR_Profile</title>

    <link rel="stylesheet" href="fbrprofile.css">
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
    <div  class="fbrprofile">
        <!-- displaying corresponding php variables with headings -->
        <div  class="backgroundrectangle"></div>
        <div  class="heading">FBR Officer Profile</div>
        <div  class="namecomponent">
            <div  class="name">Name:</div>
            <div  class="username"><?= $user_name ?></div>
        </div>
        <div  class="emailcomponent">
            <div  class="emailId">Email ID:</div>
            <div  class="useremail"><?=$user_email?></div>
        </div>
        <div  class="phonecomponent">
            <div  class="contactNumber">Contact Number:</div>
            <div  class="userphone"><?= $user_phone ?></div>
        </div>
        <div  class="cniccomponent">
            <div  class="cnicNumber">CNIC Number:</div>
            <div class="usercnic"><?= $user_CNIC ?></div>
        </div>
        <div  class="logowhilteredirect"></div>
     
        <a  class="signinredirect"  href="signin.php">Sign Out</a>
        <form action="filers.php"  > <button> <div  class="filers">
            <div  class="filersbox"></div>
            <!-- Show filers Button -->
            <div class="filerstext">Show Filers</div>
           </div>  </button></form>
        <div  class="nonfilers"><form action="non_filers.php"  > <button> <svg  preserveAspectRatio="none" viewBox="-3.75 -3.75 299.5 86.5" class="nonfilersbox">
                <path d="M 18 0 L 274 0 C 283.9411315917969 0 292 8.058874130249023 292 18 L 292 61 C 292 70.94112396240234 283.9411315917969 79 274 79 L 18 79 C 8.058874130249023 79 0 70.94112396240234 0 61 L 0 18 C 0 8.058874130249023 8.058874130249023 0 18 0 Z" />
            </svg>
            <!-- Show Non filers Button -->
            <div  class="nonfilerstext">Show Non-Filers</div>
            </button></form>  </div>
        <div class="untitled"></div>
    </div>



</body>

</html>