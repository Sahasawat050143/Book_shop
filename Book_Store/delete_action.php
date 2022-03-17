<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <title>ลบรายการสินค้าที่จำหน่าย</title>
 </head>
 <body>
	<?php
		if(isset($_GET["b_id"]))
		{
			include("connect.php");
			$b_id=$_GET["b_id"];
			$b_file=$_GET["b_file"];
			if(file_exists("img_Book/".$b_file))
				unlink("img_Book/".$b_file)or die("ลบไฟล์ไม่ได้");
			$sql="DELETE FROM tblproduct
				WHERE book_id=$b_id";
			if(!mysqli_query($conn,$sql)){
				echo "<p><div align='center'>คำเตือน: ระบบไม่สามารถลบข้อมูลหนังสือได้</div></p>";
			}else{
				echo "<div align='center'><h2>ระบบ ลบข้อมูลหนังสือเรียบร้อยแล้ว</h2></div>";
			}
			mysqli_close($conn);
		}
	?>
	<div align="center">|<button class="btn btn-primary text-white mt-3" onclick="window.location='delete_Book.php'">กลับหน้าลบรายการหนังสือที่จำหน่าย</button></div>
 </body>
</html>
