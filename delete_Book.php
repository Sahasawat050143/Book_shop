<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" type="text/css" href="b-style.css">
  <title>ลบรายการสินค้าที่จำหน่าย</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
 </head>
 <body>
	<div class="container mt-5">
	<div><h2>งานยกเลิกรายการหนังสือที่จำหน่าย</h2></div>
    <button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button>
	<hr width='700' align='left'>
	<table border='1' cellpadding='5' cellspacing='0'>
	<tr align='center'>
	<td width='80'>รหัสหนังสือ</td>
	<td width='200'>ชื่อหนังสือ</td>
	<td width='400'>รายละเอียด</td>
	<td width='70'>ราคา</td>
	<td width='70'>จำนวน</td>
	<td width='50'>จัดการ</td>
	</tr>
	<?php
		include("connect.php");
		$sql="SELECT * FROM tblproduct ORDER BY book_id";
		$result=mysqli_query($conn,$sql)or die("เกิดข้อผิดพลาด").mysqli_error();
		while($rs=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td align='center'>$rs[book_id]</td>";
			echo "<td>$rs[book_title]</td>";
			echo "<td>$rs[book_detail]</td>";
			echo "<td align='center'>$rs[book_price]</td>";
			echo "<td align='center'>$rs[book_unit]</td>";
			echo "<td align='center'>";
			echo "<a href='delete_action.php?b_id=$rs[book_id]&b_file=$rs[book_img]' onclick=\"return confirm('ท่านยืนยันการลบรายการหนังสือนี้ใช่หรือไม่')\">ลบ</a>";
			echo "</td>";
			echo "</tr>";
		}
		mysqli_close($conn);
	?>
	</div>
 </body>
</html>
