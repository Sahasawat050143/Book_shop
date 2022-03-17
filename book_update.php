<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" type="text/css" href="b_style.css">
  <title>แก้ไขรายการหนังสือที่จำหน่าย</title>
 </head>
 <body>
	<?php
		$book_id=$_POST['book_id'];
		$book_title=$_POST['book_title'];
		$book_detail=$_POST['book_detail'];
		$book_price=$_POST['book_price'];
		$book_unit=$_POST['book_unit'];
		$current_book_img=$_POST['current_book_img'];
		$new_file_img=basename($_FILES["book_img"]["name"]);
		$path_img="img_Book/";
		if((strcmp($current_book_img,$new_file_img)!=0) && ($new_file_img!=""))
		{
			if(file_exists($path_img.$current_book_img))
				unlink($path_img.$current_book_img)or die("ลบไฟล์ภาพไม่ได้").mysqli_error();
			if(move_uploaded_file($_FILES["book_img"]["tmp_name"],$path_img.$new_file_img))
			{
				echo "<p align='center'>มีการเปลี่ยนแปลงไฟล์ภาพรายการหนังสือเล่มนี้</p>";
				$book_img=$new_file_img;
			}
			else
			{
				echo "<p>Error#6 : เกิดข้อผิดพลาดในการอัพโหลดไฟล์รูปภาพ</p>";
				exit(0);
			}
		}
		else
		{
			echo "<p align='center'>ไม่มีการเปลี่ยนแปลงไฟล์ภาพ</p>";
			$book_img=$current_book_img;
		}
		include("connect.php");
		$sql="UPDATE tblproduct 
            SET book_title='$book_title',
				book_detail='$book_detail',
				book_price='$book_price',
				book_unit='$book_unit',
				book_img='$book_img'
			WHERE book_id='$book_id'";
		if(!mysqli_query($conn,$sql))
		{
			echo "<p><div align='center'>คำเตือน: ระบบไม่สามารถปรับปรุงข้อมูลหนังสือได้</div></p>";
		}else{
			echo "<div align='center'><h2>ระบบ ปรับปรุงข้อมูลหนังสือเรียบร้อยแล้ว</h2></div>";
		}
		echo "<div align='center'>| <a href='edit_Book.php'>กลับหน้าปรับปรุงรายการ</a></div>";
		mysqli_close($conn);
	?>
 </body>
</html>
