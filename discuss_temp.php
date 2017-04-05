<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<title>Discuss</title>
</head>
<body>

	<div>
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

//以下為select

		$sql_select="SELECT id,name,title,context FROM discuss";
		$result=$conn->query($sql_select);

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<br/>";
				echo "id:".$row["id"];
				echo " name:".$row["name"];
				echo "<br/>";
				echo "title:".$row["title"];
				echo "<br/>";
				echo "context:".$row["context"];
				echo "<br/>";
			}
		}

//結束
		$sql="SELECT * FROM discuss";
		$result = $conn->query($sql);

		$re_nr=$result->num_rows;

		if ($re_nr >0){
			echo "<p>have ".$re_nr." data</p>";
		}else{
			echo "<p>none</p>";
		}
		$conn->close();

		?>
	</div>

</body>
</html>