<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
<title></title>
</head>
<body>

	<p>
		<?php 
		$servername = "ja-cdbr-azure-east-a.cloudapp.net";
		$username = "bb763638944ffa";
		$password = "5b724968";


		$conn = mysqli_connect($servername, $username, $password) or die("連不到資料庫");
		mysqli_select_db($conn,"discuss")

		$sql="SELECT * FROM discuss";

		mysqli_query($conn, "SET CHARACTER SET utf8");
		mysqli_query($conn, "SET collation_connection = 'utf8_general_ci'")

		$result=mysqli_query($conn,$sql);
		?>
	</p>

</body>
</html>
