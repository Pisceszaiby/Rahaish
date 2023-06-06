<!DOCTYPE html>
<html lang="en">

<head>

	<title>Non Filers</title>
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
	//connection 
	$username = 'root';
	$password = '';
	$db = 'rahaish';

	$con = mysqli_connect('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");
	//sql query
	$sql = "SELECT user_name,user_email,user_phone,user_CNIC,user_role FROM non_filers natural join users";
	//result of sql query
	$result = mysqli_query($con, $sql) or die("Bad query: $sql");
	//results displayed in form of table
	echo "   <div class='container-fluid'><table> <tr><th> User Name </th><th> User Email </th><th> User Phone </th><th> User CNIC </th><th> User Role </th></tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<th>" . $row['user_name'] . "</th>";

		echo "<th>" . $row['user_email'] . "</th>";

		echo "<th>" . $row['user_phone'] . "</th>";

		echo "<th>" . $row['user_CNIC'] . "</th>";

		echo "<th>" . $row['user_role'] . "</th>";

		echo "</tr>";
	}
	echo "</table></div>";
	?>
</body>
<h1>Data of Non Filers</h1>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>