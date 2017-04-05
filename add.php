<html>
<head>
<title>討論區</title>

</head>
<body>

<?php

$title=$_POST["title"];
$name=$_POST["name"];
$email=$_POST["email"];
$context=$_POST["context"];
$password=$_POST["password"];

echo("$title"."$name");
	

 ?>

<!-- <?php

$servername = "ja-cdbr-azure-east-a.cloudapp.net";
$username = "bb763638944ffa";
$password = "5b724968";
$dbname = "discuss";		

		// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

?> -->


</body>
</html>







<!-- 
<?header("location:discuss_temp.php");?>    
<?php
include("db.php");  
/* 接收表單資料 */
$title=$_POST["title"];
$name=$_POST["name"];
$email=$_POST["email"];
$context=$_POST["context"];
$password=$_POST["password"];
/* 將欄位資料加入資料庫 */
$sql_insert="INSERT INTO discuss (title,name,email,context,password) 
VALUES ('$title','$name','$email','$context','$password')";
mysql_query($sql_insert);
?>
 -->
