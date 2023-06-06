<!DOCTYPE html>
<html>

<head>

    <title>Homepage user</title>
    <!-- Required meta tags -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>


    <?php



    $var_value = $_REQUEST['varname'];
    ?>
    <div class="container-fluid">
        <div class="homepageUser">
            <div class="backgroundrectangle"></div>
            <!-- navigation -->
            <a class="homenav" href="homepageUser.php">Home</a>
            <a class="buynav" href="buyClassification.php">Buy</a>
            <a class="rentnav" href="rentClassification.php">Rent</a>

            <div class="untitled"></div>
            <div class="heading">Find the Perfect Property</div>
            <!-- buy button -->
            <form action="buyClassification.php">
                <div class="buybutton">
                    <button class="rectangle32">
                        <div class="buybutton27ab752e">Buy</div>
                    </button>
                </div>
            </form>
            <!-- rent button -->
            <form action="rentClassification.php">
                <div class="rentbutton">
                    <button class="rentrectangle">
                        <div class="renttext">Rent</div>
                    </button>
                </div>
            </form>



            <div class="x9921bfaa"> رہائش </div>
        </div>
    </div>


</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>