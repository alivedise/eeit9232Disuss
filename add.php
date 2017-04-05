
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
$sql_insert="INSERT INTO discuss (title,name,email,context,password) VALUES ('$title','$name','$email','$context','$password')";
mysql_query($sql_insert);
?>

