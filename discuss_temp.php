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

	<script src="js/dis.js" type="text/javascript" charset="utf-8"></script>

	<link rel=stylesheet type="text/css" href="css/discuss.css">


	<title>意見留言板</title>
</head>
<body>
	<div id="top"></div>

	<span id="send">
		<input name="button" type="button" value="發表文章" class="btn btn-info" onclick="location.href='dis_response.html'">
		<button type="button" class="btn btn-primary" id="gotop" href="#top">回到頂端</button>
	</span>

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

		$sql_select="SELECT id,name,title,context,date FROM discuss order by id desc";
		$result=$conn->query($sql_select);


		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<div class='dispart'"." id='p".$row["id"]."'><h5>";
				echo "<span class='id'>".$row["id"]."</span> ".$row["title"];
				echo "<small>"."作者：".$row["name"]."/"."發文時間：".$row["date"]."</small></h5>";	
				echo "<div>";
				echo $row["context"];
				echo "</div>";
				echo "<div class='action'><a>修改文章</a>・<a id='".$row["id"]."''>刪除文章</a></div>";
				echo "</div>";
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