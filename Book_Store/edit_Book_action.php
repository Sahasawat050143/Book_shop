<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" type="text/css" href="b-style.css">
  <title>edit action</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
 </head>
 <body>
	<div class="container mt-5">
		<h2>แก้ไขรายการหนังสือที่จำหน่าย</h2>
		<button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button>
		<button class="btn btn-primary text-white mt-3" onclick="window.location='edit_Book.php'">งานแก้ไขรายการหนังสือ</button>
		<hr class="hr-line" align='left'>
		<?php
			include("connect.php");
			$path_img="img_book/";
			$b_id=$_GET["b_id"];
			$sql="SELECT * FROM tblproduct WHERE book_id='$b_id'";
			$result=mysqli_query($conn,$sql)or die("ไม่สามารถค้นหาข้อมูลได้").mysqli_error();
			if(mysqli_num_rows($result)==1)
			{
				$rs=mysqli_fetch_array($result);
					echo "<form name='femeditbook' method='POST' action='book_update.php' enctype='multipart/form-data'>";
					echo "<table width='700' border='0' cellpadding='5' celspacing='3'>";
					echo "<tr>";
					echo "<td align='right' width='400'>รหัสหนังสือ</td>";
					echo "<td><input type='text' name='book_id' value='$rs[book_id]' readonly></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td align='right' width='400'>ชื่อหนังสือ</td>";
					echo "<td><input type='text' name='book_title' size='80' value='$rs[book_title]'></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td align='right' width='400'>รายละเอียด</td>";
					echo "<td><textarea name='book_detail' cols='50' rows='3'>$rs[book_detail]</textarea></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td align='right' width='400'>ราคาต่อเล่ม</td>";
					echo "<td><input type='text' name='book_price' size='10' value='$rs[book_price]'></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td alugn='right' width='400'>จำนวนที่มี</td>";
					echo "<td><input type='text' name='book_unit' size='10' value='$rs[book_unit]'></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td align='right' valign='top'>เปลี่ยนรูปภาพ</td>";
					echo "<td><input type='file' name='book_img'><br><br>ชื่อไฟล์ : $rs[book_img]<br><br><img src='".$path_img.$rs["book_img"]."'></td>";
					echo "<input type='hidden' name='current_book_img' value='$rs[book_img]'>";
					echo "</tr>";
					echo "<tr>";
					echo "<td align='right' width='400'></td>";
					echo "<td><input type='submit' name='submit' value='แก้ไขรายการหนังสือ'></td>";
					echo "</tr>";
					echo "</table>";
					echo "</form>";
			}
			else
			{
				echo "ไม่พบข้อมูลสินค้าที่ต้องการแก้ไข";
			}
			mysqli_close($conn);
		?>
		<hr class="hr-line" align='left'>
	</div>
 </body>
</html>
