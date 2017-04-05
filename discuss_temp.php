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

	<title></title>
</head>
<body>

<div>
	<? php 
		$servername = "ja-cdbr-azure-east-a.cloudapp.net";
		$username = "bb763638944ffa";
		$password = "5b724968";
		$dbname = "discuss";		

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql_select="SELECT * FROM discuss";

		$result=$conn->query($sql_select);

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<br/>"."id:".$row["id"]." name:".$row["name"]."<br/>"."title:".$row["title"]."<br/>"."context".$row["context"]."<br/>";
			}
		}

	?>
</div>

</body>
</html>