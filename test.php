<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "ja-cdbr-azure-east-a.cloudapp.net";
$username = "bb763638944ffa";
$password = "5b724968";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

</body>
</html>

