<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Show Book</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
 </head>
 <body>
     <div class="container mt-5">
	<h2>งานแสดงรายการหนังสือที่จำหน่าย</h2>
	<button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button>
	<hr>
	<table border='1' cellspacing='0'>
		<tr align='center'>
			<td width='80'>รหัสหนังสือ</td>
			<td width='200'>ชื่อหนังสือ</td>
			<td width='400'>รายละเอียด</td>
			<td width='70'>ราคา</td>
			<td width='50'>จำนวน</td>
			<td width='100'>รูปภาพ</td>
		</tr>
		<?php
			include("connect.php");
			$sql="SELECT * FROM tblproduct ORDER BY book_id";
			$result=mysqli_query($conn,$sql) or die ("เกิดข้อผิดพลาด").mysqli_error();
			$path_img="img_book/";
			while($rs=mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td align='center'>".$rs['book_id']."</td>";
				echo "<td>".$rs["book_title"]."</td>";
				echo "<td>".$rs["book_detail"]."</td>";
				echo "<td align='center'>".$rs["book_price"]."</td>";
				echo "<td align='center'>".$rs["book_unit"]."</td>";
				echo "<td align='center'>";
				echo "<img src='".$path_img.$rs["book_img"]."' width='60' height='80'><br>";
				echo $rs["book_img"];
				echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_close($conn);
		?>
        </div>
 </body>
</html>
