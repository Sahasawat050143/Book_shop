<?php
	$server=$_SERVER['HTTP_HOST'];
	$username="root";
	$password="";
	$database="dbbook";
	$conn=mysqli_connect($server,$username,$password,$database);
	if(!$conn){
		die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!".mysqli_connect_error());
	}
?>