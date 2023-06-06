<!DOCTYPE html>
<html lang="en">

<head>

	<title>Filers</title>
	<!-- Required meta tags -->

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Required meta tags -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">

</head>

<body style="background-color:LightGrey;">
	<?php
	//connection with database
	$username = 'root';
	$password = '';
	$db = 'rahaish';

	$con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");
	//sql query
	$sql = "SELECT user_name,user_email,user_phone,user_CNIC,NTN
FROM Filer_Details;";

	$result = mysqli_query($con, $sql) or die("Bad query: $sql"); //result
	echo " <h1>Data of Filers</h1>  <div class='container-fluid'><table> <tr><th> User Name </th><th> User Email </th><th> User Phone </th><th> User CNIC </th><th>NTN</th></tr>";
	//result displayed in the form of table
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<th>" . $row['user_name'] . "</th>";

		echo "<th>" . $row['user_email'] . "</th>";

		echo "<th>" . $row['user_phone'] . "</th>";

		echo "<th>" . $row['user_CNIC'] . "</th>";

		echo "<th>" . $row['NTN'] . "</th>";

		echo "</tr>";
	}
	echo "</table></div>";
	?>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>



</html>