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
		$dbname = "discuss";		

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
        echo "Connected successfully";

        $sql="SELECT * FROM discuss";
        $result = $conn->query($sql);
		
        if ($result->num_rows >0){
            echo "<p>have ";
            echo " data</p>"
		}else{
			echo "<p>none</p>";
		}
		$conn->close();

		?>	
		
	</p>
		
</body>
</html>
