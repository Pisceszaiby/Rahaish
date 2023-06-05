<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Non Filers</title>
	<link rel="stylesheet" href="non_filers.css">
</head>
<body
style="background-color:LightGrey;">
<?php
//connection 
$username = 'root';
$password = '';
$db = 'rahaish';

$con = mysqli_connect ('127.0.0.1:3306', $username, $password, $db) or die("Unable to connect");
//sql query
$sql = "SELECT user_name,user_email,user_phone,user_CNIC,user_role FROM non_filers natural join users";
//result of sql query
$result = mysqli_query($con,$sql) or die("Bad query: $sql");
//results displayed in form of table
echo "<table> <tr><th> User Name </th><th> User Email </th><th> User Phone </th><th> User CNIC </th><th> User Role </th></tr>";
while($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<th>".$row['user_name']."</th>";

echo "<th>".$row['user_email']."</th>";

echo "<th>".$row['user_phone']."</th>";

echo "<th>".$row['user_CNIC']."</th>";

echo "<th>".$row['user_role']."</th>";

echo "</tr>";
}
echo "</table";
?>
</body>
<h1 >Data of Non Filers</h1>

</html>

  

