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
$category = $_POST["category"];
$brand = $_POST["brand"];
$quantity = $_POST["quantity"];



$sql="INSERT INTO `stock`(`name`,`category`,`brand`,`quantity`		
) 
       VALUES ('".$name."','".$category."','".$brand ."','".$quantity."')";
        mysqli_query($conn,$sql);
}

header("Location: ../HTML/stock.php?insetion=pass");


?>


