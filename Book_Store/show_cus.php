<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>งานแสดงข้อมูลลูกค้า</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
 </head>
 <body>
	<div class="container mt-5">
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4"><h2>งานแสดงข้อมูลลูกค้า</h2></span>
      </a>

    </header>
		<button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">รหัสลูกค้า</th>
					<th scope="col">ชื่อลูกค้า</th>
					<th scope="col">นามสกุลลูกค้า</th>
					<th scope="col">ที่อยู่</th>
					<th scope="col">เบอร์โทรศัพท์</th>
					<th scope="col">E-Mail</th>
				</tr>
  			</thead>
  			<tbody>	
				<?php
					include("connect.php");
					$sql ="SELECT id,cus_name,surname,cus_address,tel,email";
					$sql = $sql." FROM customer ORDER BY id";
					$result=mysqli_query($conn,$sql)or die("ระบบเกิดข้อผิดพลาดในการแสดงข้อมูลการค้า").mysqli_error();
					$num_data=mysqli_num_rows($result);
					if($num_data!=0)
					{
						while($rs=mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>$rs[id]</td>";
							echo "<td>$rs[cus_name]</td>";
							echo "<td>$rs[surname]</td>";
							echo "<td>$rs[cus_address]</td>";
							echo "<td>$rs[tel]</td>";
							echo "<td>$rs[email]</td>";
							echo "</tr>";
						}
					}else{
							echo "<tr align='center'><td colspan='6'>ไม่มีข้อมูลลูกค้า</td></tr>";
						}
					mysqli_close($conn);	
				?>
			</tbody>	
		</table>
	</div>
 </body>
</html>