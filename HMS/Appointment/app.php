<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "zeus";
   //connect to the database
   $conn = mysqli_connect($host,$user,$password,$db);

   if($conn->connect_error)
	{
		die("connection faild:" . $conn->connect_error);
	}



if( isset( $_POST['submit'])) {

$name = $_POST["name"];
$nic = $_POST["nic"];
$contact_no = $_POST["contact_no"];
$date = $_POST["date"];
$time = $_POST["time"];
$doctor_name = $_POST["doctor_name"];



$sql="INSERT INTO `appointments`(`name`,`nic`,`contact_no`,`date`,`time`,`doctor_name`) VALUES ('".$name."','".$nic."','".$contact_no."','".$date."','".$time."','".$doctor_name."')";
mysqli_query($conn,$sql);
}

header("Location: ../HomePage/HomePage.html");


?>


