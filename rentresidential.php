<!DOCTYPE html>
<html>

<head>

    <title>Rent_Residential</title>
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
        <div class="rentcommercial">
            <div class="backgroundrectangle"></div>
            <a class="homenav" href="homepageUser.php">Home</a>
            <a class="buynav" href="buyClassification.php"> Buy</a>
            <!-- navigation -->
            <a class="rentnav" href="rentClassification.php">Rent</a>
            <div class="xdecdbe08"> رہائش </div>
            <div class="whiterectangle"></div>
            <div class="commercialtext">Residential</div>

            <div class="buydisplay">
                <div class="buyrectangle"></div>
                <div class="buytext">Rent</div>
            </div>


            <!-- search button -->
            <form method="POST" action="search_rent_res.php">
                <div class="searchbutton">
                    <button class="rectangle34">
                        <svg preserveAspectRatio="none" viewBox="0 0 35.9970703125 36.00341796875" class="searchsvg">
                            <path d="M 35.5078125 31.12734413146973 L 28.49765586853027 24.1171875 C 28.18124961853027 23.80078125 27.75234413146973 23.625 27.30234336853027 23.625 L 26.15625 23.625 C 28.09687423706055 21.14296913146973 29.25 18.02109336853027 29.25 14.625 C 29.25 6.546093940734863 22.70390701293945 0 14.625 0 C 6.546092987060547 0 0 6.546093940734863 0 14.625 C 0 22.70390701293945 6.546093940734863 29.25 14.625 29.25 C 18.02109336853027 29.25 21.14296913146973 28.09687423706055 23.625 26.15625 L 23.625 27.30234336853027 C 23.625 27.75234413146973 23.80078125 28.18124961853027 24.1171875 28.49765586853027 L 31.12734413146973 35.5078125 C 31.78828239440918 36.16875076293945 32.85703277587891 36.16875076293945 33.51093673706055 35.5078125 L 35.50078201293945 33.51796722412109 C 36.16172027587891 32.85702896118164 36.16172027587891 31.78828048706055 35.5078125 31.12734222412109 Z M 14.625 23.625 C 9.653905868530273 23.625 5.625 19.60312461853027 5.625 14.625 C 5.625 9.653905868530273 9.646875381469727 5.625 14.625 5.625 C 19.59609413146973 5.625 23.625 9.646875381469727 23.625 14.625 C 23.625 19.59609413146973 19.60312461853027 23.625 14.625 23.625 Z" />
                        </svg>
                    </button>
                </div>

                <!-- data fields -->

                <div><input type="number" name="rent_res_min_area" class="minpricetext" placeholder="Minimum Price" required> </div>
                <div><input type="number" name="rent_res_max_area" class="maxpricetext" placeholder="Maximum Price" required></div>
                <div><input type="text" name="rent_res_location" class="housingsoctext" placeholder="Housing Society" required></div>
                <div><input type="text" name="rent_res_classification" placeholder="Classification" class="classificationtext" required></div>
            </form>

            <svg preserveAspectRatio="none" viewBox="0 -0.5 421 1" class="classification">
                <path d="M 0 0 L 421 0" />
            </svg>
            <svg preserveAspectRatio="none" viewBox="0 -0.5 707 1" class="housingsociety">
                <path d="M 0 0 L 707 0" />
            </svg>
            <svg preserveAspectRatio="none" viewBox="-0.0029296875 -0.5 707.005859375 5" class="maxprice">
                <path d="M 0 4 L 707 0" />
            </svg>
            <svg preserveAspectRatio="none" viewBox="0 -0.5 421 1" class="minprice">
                <path d="M 0 0 L 421 0" />
            </svg>

        </div>
    </div>


</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>