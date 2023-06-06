<!DOCTYPE html>
<html>

<head>

    <title>Sign In Role</title>
    <!-- Required meta tags -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-lg-4 login-pt1 ">
                <div class="logogreen"> رہائش</div>
                <h2>Find Your Ideal Property</h2>
                <img src="assets/login.png" alt="">
            </div>
            <div class="col-lg-8 login-pt2">
                <h2>Sign In</h2>
                <form action="loginresult.php" method="POST" name="signinform">
                    <!-- input data fields -->
                    <input type="email" name="useremail" class="emailAddress" placeholder="Enter Email ID: " required>
                    <input type="password" name="userpassword" class="password" placeholder="Enter Password: " required>
                    <br>
                    <button type="submit" class="btn">Sign In
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