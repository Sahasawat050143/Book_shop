<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>add_Book</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
 </head>
 <body>
     <div class="container">
	<h2 class="mt-5">เพิ่มรายการหนังสือที่จำหน่าย</h2>
	<button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button>
	<hr>
	<form name="frmbook" method="POST" action="add_Book_action.php" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">รหัสหนังสือ</span>
            <input type="text" name="book_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">ชื่อหนังสือ</span>
            <input type="text" name="book_title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">รายละเอียด</span>
            <textarea class="form-control" name="book_detail" aria-label="With textarea"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">ราคาต่อเล่ม</span>
            <input type="text" name="book_price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">จำนวนที่มี</span>
            <input type="text" name="book_unit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
			<td align='right'>รูปภาพ</td>
			<td><input type="file" name="book_img" id="book_img"></td>
		</tr>
		<tr>
			<td align='right'></td>
			<td><input type="submit" name="submit" value="เพิ่มสินค้า"></td>
		</tr>
		</table>
		</form>
		<hr>
        </div>
 </body>
</html>
