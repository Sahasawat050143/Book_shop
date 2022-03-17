<?php 
  session_start();
  if(!isset($_SESSION["email"])){
   	header('location: index.php');
  }
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Admin_page</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
 </head>
 <style>
	a {text-decoration:none}
 </style>
 <body>
	 <div class="container">
	 	<div class="row">
			<div class="col-6">
				<h1 class="m-3">ระบบจัดการร้านหนังสือ</h1>
			</div>
			<div class="col-6 mt-4">
				<button onclick="window.location ='index.php'" class="btn btn-primary">ออกจากระบบ</button>
			</div>
		</div>	
	 	<div class="row my-3">
			 <h3 class="m-3">จัดการข้อมูลลูกค้า</h3>
            <div class="col-xl-3 col-md-6">
                <button onclick="window.location='create_cus.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">เพิ่มข้อมูลลูกค้า</div>
				</button>
            </div>
			<div class="col-xl-3 col-md-6">
                <button onclick="window.location='show_cus.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body">แสดงข้อมูลลูกค้า</div>
				</button>
            </div>
			<div class="col-xl-3 col-md-6">
                <button onclick="window.location='edit_cus.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">แก้ไขข้อมูลลูกค้า</div>
				</button>
            </div>
			<div class="col-xl-3 col-md-6">
                <button onclick="window.location='delete_cus.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">ลบข้อมูลลูกค้า</div>
				</button>
            </div>
		</div>
		<div class="row my-3">
			 <h3 class="m-3">จัดการข้อมูลหนังสือ</h3>
			 <div class="col-xl-3 col-md-6">
                <button onclick="window.location='add_book.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">เพิ่มข้อมูลหนังสือ</div>
				</button>
            </div>
			<div class="col-xl-3 col-md-6">
                <button onclick="window.location='show_Book.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">แสดงข้อมูลหนังสือ</div>
				</button>
            </div>
			<div class="col-xl-3 col-md-6">
                <button onclick="window.location='edit_Book.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">แก้ไขข้อมูลหนังสือ</div>
				</button>
            </div>
			<div class="col-xl-3 col-md-6">
                <button onclick="window.location='delete_Book.php'" class="card bg-primary text-white mb-4 p-5">
                    <div class="card-body p-3">ลบข้อมูลหนังสือ</div>
				</button>
            </div>
		</div>
 </body>

</html>
