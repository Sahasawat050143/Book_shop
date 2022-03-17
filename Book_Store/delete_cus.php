<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลบข้อมูลลูกค้า</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
    <h2>ลบข้อมูลลูกค้า</h2>
    <button class="btn btn-primary text-white mt-3" onclick="window.location='admin_page.php'">กลับหน้าหลัก</button><hr width="80%" align="left">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>กรอกรหัสลูกค้า :
        <input type="text" name="search" required><input class="ms-2" type="submit" name="submit" value="ค้นหา"></p>
    </form>
    <hr>
    <?php
        if(isset($_POST['submit'])){
            $cus_id = $_POST['search'];
            include("connect.php");
            $sql = "SELECT * FROM customer WHERE id = '$cus_id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){
                $rows = mysqli_fetch_array($result);
                $cus_id = $rows['id'];
                $cus_name = $rows['cus_name'];
                $cus_surname = $rows['surname'];
                $cus_address = $rows['cus_address'];
                $cus_tel = $rows['tel'];
                $cus_email = $rows['email'];
                echo "<form method='POST' action='delete_cus_action.php'>";
                echo "<table>";
                echo "<tr>";
                echo "<td width='150' align='right'>รหัสลูกค้า</td>";
				echo "<td>$cus_id</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td width='150' align='right'>ชื่อลูกค้า</td>";
				echo "<td>$cus_name</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td width='150' align='right'>นามสกุลลูกค้า</td>";
				echo "<td>$cus_surname</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td width='150' align='right'>ที่อยู่</td>";
				echo "<td>$cus_address</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td width='150' align='right'>เบอร์โทรศัพท์</td>";
				echo "<td>$cus_tel</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td width='150' align='right'>E-mail</td>";
				echo "<td>$cus_email</td>";
                echo "</tr>";
                echo "<tr>";
				echo "<td align='right'></td>";
                echo "<input type='hidden' name='cus_id' value='$cus_id'>";
				echo "<td><input name='del' type='submit' value='ลบข้อมูล' onclick='return confirm('ต้องการจะลบข้อมูลลูกค้าท่านนี้หรือไม่')'></td>";
				echo "</tr>";
                echo "</table>";
                echo "</form>";
            }
            else{
                echo "ไม่พบข้อมูลที่ต้องการลบ";
                exit(0);
            }
            mysqli_close($conn);
        }
    ?>
    </div>
</body>
</html>