<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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

		$name="pikapika";
		$title="pikatest";
		$email="pika@pika";
		$password="12345678";
		$context="eat";

       $sql_insert="INSERT INTO discuss (name,title,email,password,context) VALUES ('$name','$title','$email',$password','$context')";
		if (mysqli_query($conn, $sql_insert)) {
		    echo "New record created successfully";
		} else {
   		echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
		}

//        $sql_delete="DELETE FROM discuss WHERE id=21";
//        if ($conn->query($sql_delete)===TRUE){
//            echo "Record deleted successfully";
//        }else{
//            echo "Error record:".$conn->error;
//        }

		$sql_select="SELECT id,name FROM discuss";
		$result=$conn->query($sql_select);

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "</br>"."id:".$row["id"];
				echo " name:".$row["name"];
			}
		}


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
		
	</p>
	
</body>
</html>
