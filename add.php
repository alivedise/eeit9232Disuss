<html>
<head>
	<title>討論區</title>

</head>
<body>

	<?php

	$servername = "ja-cdbr-azure-east-a.cloudapp.net";
	$username = "bb763638944ffa";
	$password = "5b724968";
	$dbname = "discuss";		

		// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	?>

	<?php

	$title=$_POST["title"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$context=$_POST["context"];
	$password=$_POST["password"];

	echo("$title"."$name"."$email"."$context"."$password");

	$sql_insert="INSERT INTO discuss (name,title,email,password,context) VALUES ('$name','$title','$email','$password','$context')";
	if (mysqli_query($conn, $sql_insert)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
	}
	

	?>




</body>
</html>








