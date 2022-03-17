<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานลงทะเบียนสมาชิก</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
<h2>ลงทะเบียนสมาชิกสำหรับลูกค้า</h2>
	<table>
		<tr>
            <td><button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button></td>
            <td><button class="btn btn-primary text-white mt-3" onclick="window.location='create_cus.php'">กลับไปที่หน้าเพิ่มรายชื่อลูกค้า</button></td>
		</tr>
	</table>
	<hr>
    <?php
        include("connect.php");
        $cus_id = $_POST["id"];
        $cus_name = $_POST["cus_name"];
        $cus_surname = $_POST["cus_surname"];
        $cus_addr = $_POST["cus_addr"];
        $cus_tel = $_POST["cus_tel"];
        $cus_email = $_POST["cus_email"];

        $check = "SELECT * FROM customer WHERE id = '$cus_id'";
        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result)==1){
            echo "รหัสข้อมูลของลูกค้ามีการซ้ำกัน";
        }
        else{
            $sql = "INSERT INTO customer(id,cus_name,surname,cus_address,tel,email)";
            $sql = $sql."VALUES('$cus_id','$cus_name','$cus_surname','$cus_addr','$cus_tel','$cus_email')"; 

            if(mysqli_query($conn,$sql)){
                echo "ระบบสามารถลงทะเบียนได้";
                echo "<a href='create_cus'></a>";
            }
            else{
                echo "เกิดข้อผิดพลาดในการลงทะเบียนลูกค้า";
                echo "<a href='create_cus'></a>";
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>