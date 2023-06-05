<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="search_buy_com.css">
    <title>Buy Commercial</title>
</head>

<body>
    <?PHP
    //buy residential
    error_reporting(0);
    $buy_com_min_area = $_POST['buy_com_min_area'];
    $buy_com_max_area = $_POST['buy_com_max_area'];
    $buy_com_location = $_POST['buy_com_location'];
    $buy_com_classification = $_POST['buy_com_classification'];

    $username = 'root';
    $password = '';
    $db = 'rahaish';

    $con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");



    $sql = "SELECT user_name AS 'Property Agent', price,address_desc,property_id
    from rent_buy_searching
    where society_name='$buy_com_location'
    and property_type='Commercial'
    and property_classification='$buy_com_classification'
    and price<='$buy_com_max_area' and price >='$buy_com_min_area';";




    $result = mysqli_query($con, $sql) or die("<br>Bad query:<br> $sql");

    //iteration 1
    $row = mysqli_fetch_array($result);

    if (is_null($row)) {
        $heading = "No Results";
    } else {
        $heading = " Commercial " . $buy_com_classification . " for Buying in " . $buy_com_location . " in price range Rs "
            . $buy_com_min_area . " - " . $buy_com_max_area;
        $user_name1 ="Property Agent: ".$row['Property Agent'];
        $price1 = "Price: ".$row['price']." PKR";
        $address_desc1 ="Address Description: ".$row['address_desc'];
        $property1 = $row['property_id'];
    }

    //iteration 2
    var_export($row, true);
    $row = mysqli_fetch_array($result);

    if (is_null($row)) {
        $user_name2 = "";
        $price2 = "";
        $address_desc2 = "";
        $property2 = "";
    } else {
        $user_name2 ="Property Agent: ".$row['Property Agent'];
        $price2 = "Price: ".$row['price']." PKR";
        $address_desc2 ="Address Description: ".$row['address_desc']."89";
        $property2 = $row['property_id'];
    }




    //iteration 3
    var_export($row, true);
    $row = mysqli_fetch_array($result);

    if (is_null($row)) {
        $user_name3 = "";
        $price3 = "";
        $address_desc3 = "";
        $property3 = "";
    } else {
        $user_name3 ="Property Agent: ".$row['Property Agent'];
        $price3 = "Price: ".$row['price']." PKR";
        $address_desc3 ="Address Description: ".$row['address_desc'];
        $property3 = $row['property_id'];
    }





    //iteration 4
    var_export($row, true);
    $row = mysqli_fetch_array($result);

    if (is_null($row)) {
        $user_name4 = "";
        $price4 = "";
        $address_desc4 = "";
        $property4 = "";
    } else {
        $user_name4 ="Property Agent: ".$row['Property Agent'];
        $price4 = "Price: ".$row['price']." PKR";
        $address_desc4 ="Address Description: ".$row['address_desc'];
        $property4 = $row['property_id'];
    }


    //iteration 5
    var_export($row, true);
    $row = mysqli_fetch_array($result);

    if (is_null($row)) {
        $user_name5 = "";
        $price5 = "";
        $address_desc5 = "";
        $property5 = "";
    } else {
        $user_name5 ="Property Agent: ".$row['Property Agent'];
        $price5 = "Price: ".$row['price']." PKR";
        $address_desc5 ="Address Description: ".$row['address_desc'];
        $property5 = $row['property_id'];
    }

    ?>


    <div class="propertysearchresults">
        <a class="homenav" href="homepageUser.php">Home</a>
        <a class="buynav" href="buyClassification.php">      Buy</a>
      
        <a class="rentnav" href="rentClassification.php">Rent</a>
        <div class="x2c9d6ac5"> رہائش </div>
        <div class="resultsOfBahriaTownMaximumPrice60000000RsArea16335SqFeet">
            <?= $heading ?></div>
        <div>
            <form method="post" action="propertydetails.php">
                <div class="property1">
                    <button class="backgroundrectangle1" value=<?= $property1 ?> name="Property" type="submit">
                        <div class="property1c"><?= $price1 ?> </div>
                        <div class="property1b"><?= $user_name1 ?></div>
                        <div class="property1a"><?= $address_desc1 ?></div>

                    </button>
                </div>
            </form>
        </div>


        <div>
            <form method="post" action="propertydetails.php">
                <div class="property2">
                    <button class="backgroundrectangle2" value=<?= $property2 ?> name="Property" type="submit">
                        <div class="property2c"><?= $price2 ?> </div>
                        <div class="property2b"><?= $user_name2?></div>
                        <div class="property2a"><?= $address_desc2 ?></div>

                    </button>
                </div>
            </form>
        </div>


        <div>
            <form method="post" action="propertydetails.php">
                <div class="property3">
                    <button class="backgroundrectangle3" value=<?= $property3 ?> name="Property" type="submit">
                        <div class="property3c"><?= $price3 ?> </div>
                        <div class="property3b"><?= $user_name3?></div>
                        <div class="property3a"><?= $address_desc3 ?></div>

                    </button>
                </div>
            </form>
        </div>



        <div>
            <form method="post" action="propertydetails.php">
                <div class="property4">
                    <button class="backgroundrectangle4" value=<?= $property4 ?> name="Property" type="submit">
                        <div class="property4c"><?= $price4 ?> </div>
                        <div class="property4b"><?= $user_name4?></div>
                        <div class="property4a"><?= $address_desc4 ?></div>

                    </button>
                </div>
            </form>
        </div>


        <div>
            <form method="post" action="propertydetails.php">
                <div class="property5">
                    <button class="backgroundrectangle5" value=<?= $property5 ?> name="Property" type="submit">
                        <div class="property5c"><?= $price5 ?> </div>
                        <div class="property5b"><?= $user_name5?></div>
                        <div class="property5a"><?= $address_desc5 ?></div>

                    </button>
                </div>
            </form>
        </div>











</body>

</html>