<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title></title>
 </head>
 <body>
	<?php
		$b_id=$_POST['book_id'];
		$b_title=$_POST['book_title'];
		$b_detail=$_POST['book_detail'];
		$b_price=$_POST['book_price'];
		$b_unit=$_POST['book_unit'];
		include("connect.php");
		$file_img=basename($_FILES["book_img"]["name"]);
		$path_img="img_book/".$file_img;
		if(file_exists($path_img)){
			echo "<div align='center'>Error#2 : มีไฟล์นี้ในระบบ อยู่แล้ว</div>";
			echo "<div align='center'><a href='add_Book.php'>กลับหน้าเพิ่มหนังสือ</a></div>";
			exit(0);
		}


		if(move_uploaded_file($_FILES["book_img"]["tmp_name"],$path_img)){
			echo "Upload"." ".basename($_FILES["book_img"]["name"]." "."Complete");
		}else{
			echo "<div align='center'>#Error6 : เกิดข้อผิดพลาดในการอัพโหลดไฟล์รูปภาพ</div>";
			echo "<div align='center'><a href='add_Book.php'>กลับหน้าเพิ่มหนังสือ</div>";
			exit(0);
		}
		$sql="INSERT INTO tblproduct(book_id,book_title,book_detail,book_price,book_unit,book_img)";
		$sql = $sql."VALUES('$b_id','$b_title','$b_detail','$b_price','$b_unit','$file_img')";

		if(mysqli_query($conn,$sql)){
			echo "<h2>ระบบบันทึกข้อมูลหนังสือเรียบร้อยแล้ว</h2>";
		}else{
			echo " <div align='center'>คำเตือน : ระบบไม่สามารถเพิ่มข้อมูลหนังสือได้</div> ";
		}
		mysqli_close($conn);
		echo "<br>";
	?>
	<div align='center'><a href='add_Book.php'>หน้าเพิ่มหนังสือ</a></div>
 </body>
</html>