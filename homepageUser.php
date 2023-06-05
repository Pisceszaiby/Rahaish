<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Homepage user</title>

    <link rel="stylesheet" href="homepageUser.css">
</head>

<body>


<?php



$var_value = $_REQUEST['varname'];
?>
    <div class="homepageUser">
        <div  class="backgroundrectangle"></div>
        <!-- navigation -->
        <a class="homenav" href="homepageUser.php">Home</a>
        <a  class="buynav"   href="buyClassification.php">Buy</a>
        <a  class="rentnav"  href="rentClassification.php">Rent</a>

        <div  class="untitled"></div>
        <div class="heading">Find the Perfect Property</div>
<!-- buy button -->
        <form action="buyClassification.php" >
        <div  class="buybutton">
            <button  class="rectangle32">
            <div  class="buybutton27ab752e">Buy</div>
            </button>
        </div>
       </form>
       <!-- rent button -->
        <form action="rentClassification.php">
        <div class="rentbutton">
            <button  class="rentrectangle">
            <div class="renttext">Rent</div>
            </button>
        </div>
        </form>

       

        <div class="x9921bfaa"> رہائش </div>
    </div>



</body>

</html>