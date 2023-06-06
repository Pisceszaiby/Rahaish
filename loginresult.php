<!DOCTYPE html>
<html>

<head>

    <title>LoginResult</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <?PHP

    $mail = $_POST['useremail'];
    $pass = $_POST['userpassword'];
    $mail = stripcslashes($mail);
    $pass = stripcslashes($pass);

    $username = 'root';
    $password = '';
    $db = 'rahaish';
    //contecting database 
    $con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");

    $sql = "SELECT *
    from users";
    //sql query
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");

    $user_id = -1;
    //user password and email validation   
    while ($row = mysqli_fetch_array($result)) {
        if ($row['user_email'] == $mail && $row['user_password'] == $pass) {
            $user_id = $row['user_id'];
            break;
        }
    }
    if ($user_id != -1) {

        $result1 = "Login Successful";
        $role = $row['user_role'];
        $name = $row['user_name'];
        $result2 = "Welcome " . $name;
        $result3 = "Proceed";
        if ($role == "Agent") {
            //for Role Agent
            $page = "agentprofile.php";
        }
        if ($role == "FBR Officer") {
            //for Role FBR Officer
            $page = "fbrprofile.php";
        }
        if ($role == "Society Rep") {
            //for Role Representative
            $page = "society.php";
        }
        if ($role == "Buyer/Seller") {
            //for Role Buyer/Seller
            $page = "homepageUser.php";
        }
    } else {
        //no match with existing records
        $result1 = "Login Unuccessful";
        $result2 = "";
        $result3 = "Login Again";
        $page = "signin.php";
    }

    ?>
    <div class="container-fluid">

        <div class="result">
            <h2><?= $result1 ?></h2>
            <h2 class="welcome"><?= $result2 ?></h2>
            <form method="get" action="<?= $page ?>">
                <button type="hidden" class="btn" name="varname" value="<?= $user_id ?>">

                    <?= $result3 ?>


                </button>
            </form>
        </div>
    </div>








    </div>



</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>