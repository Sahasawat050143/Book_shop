<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-6">
		<div class="row justify-content-center align-items-center">
		<div class="m-5">
		<h2>ลงทะเบียนสมาชิกสำหรับลูกค้า</h2>
	</div>
	<table>
		<tr>
			<td><button class="btn btn-primary text-white" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button></td>
		</tr>
	</table>
	<hr>
	<form name="frmemp" method="POST" action="add_cus.php">
	<table cellpadding="0" cellspacing="0" width="80%">
		<tr><td>
		<table border="0" cellpadding="5" cellspacing="2" width="100%">
			<tr>
				<td width="150" align="right">รหัสลูกค้า</td>
				<td><input name="id" type='text'></td>
			</tr>
			<tr>
				<td align="right">ชื่อลูกค้า</td>
				<td><input name="cus_name" type="text" size="50"></td>
			</tr>
            <tr>
				<td align="right">นามสกุลลูกค้า</td>
				<td><input name="cus_surname" type="text" size="50"></td>
			</tr>
			<tr>
				<td align="right">ที่อยู่</td>
				<td><textarea name="cus_addr" rows="3" cols="50"></textarea></td>
			</tr>
			<tr>
				<td align="right">เบอร์โทรศัพท์</td>
				<td><input name="cus_tel" type="text"></td>
			</tr>
            <tr>
				<td align="right">E-mail</td>
				<td><input name="cus_email" type="text"></td>
			</tr>
            <tr>
				<td align='right'></td>
				<td><input name='submit' type='submit' value='ลงทะเบียน'></td>
			</tr>
		</table>
	</form>
	</div>
		</div>	
</body>
</html>