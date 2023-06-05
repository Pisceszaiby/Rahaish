<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Agent Profile</title>

    <link rel="stylesheet" href="agentprofile.css">
</head>

<body>
    <?php

    $username = 'root';
    $password = '';
    $db = 'rahaish';
    //contains the  user_id of the logged in user
    $var_value = $_REQUEST['varname'];
    //establishing connection with database
    $con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");


    //sql query
    $sql = "SELECT user_name,user_email,user_phone,user_CNIC,agent_company,success_rate
    from users NATURAL JOIN agents
    where user_id=$var_value;";


    //result of sql query
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_array($result);


    //variables to store relevant info
    $company = $row['agent_company'];
    $success = $row['success_rate'];
    $user_name = $row['user_name'];
    $user_phone = $row['user_phone'];
    $user_CNIC = $row['user_CNIC'];
    $user_email = $row['user_email'];


    //second sql query
    $sql1 = "SELECT NTN from filers where user_id=$var_value;";
    //result of second sql query
    $result = mysqli_query($con, $sql1) or die("Bad query: $sql1");
    $row = mysqli_fetch_array($result);
    if ($row['NTN'] == "") {
        $validation = "Not Validated";
    } else
        $validation = "Validated";

    ?>


<!--  HTML Tags -->

    <div class="agentprofile">
        <div class="backgroundrectangle"></div>
        <div class="heading">Agent Profile</div>
        <div class="untitled"></div>
        <div class="namecomponent">
            <div class="name">Name:</div>
            <div class="username"><?= $user_name ?></div>  
            <!-- using PHP variable user_name -->
        </div>
 
        <div class="emailcomponent">
            <div class="emailId">Email ID:</div>
            <div class="useremail"><?= $user_email ?></div>
              <!-- using PHP variable user_email -->
        </div>
        <div class="phonecomponent">
            <div class="contactNumber">Contact Number:</div>
            <div class="userphone"><?= $user_phone ?></div>
              <!-- using PHP variable user_phone -->
        </div>
        <div class="cniccomponent">
            <div class="cnicNumber">CNIC Number:</div>
            <div class="usercnic"><?= $user_CNIC ?></div>
              <!-- using PHP variable user_CNIC -->
        </div>
        <div class="companycomponent">
            <div class="company">Company:</div>
            <div class="agentcompany"><?= $company ?></div>
              <!-- using PHP variable company -->
        </div>

        <div class="fbrcomponent">
            <div class="fbrValidation">FBR Validation: </div>
            <div class="yesno"><?= $validation ?></div>
              <!-- using PHP variable validation -->
        </div>
        <div class="logowhilteredirect">
            <form action="landingPage.html"></form>
        </div>
        <a class="signinredirect" href="signin.php">Sign Out</a>
     
    </div>



</body>

</html>