<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลลูกค้า</title>
</head>
<body>
    <?php
        include("connect.php");
        $cus_id = $_POST["cus_id"];
        $cus_name = $_POST["cus_name"];
        $cus_surname = $_POST["cus_surname"];
        $cus_address = $_POST["cus_address"];
        $cus_tel = $_POST["cus_tel"];
        $cus_email = $_POST["cus_email"];

        $sql = "UPDATE customer 
                SET cus_name = '$cus_name',
                    surname = '$cus_surname',
                    cus_address = '$cus_address',
                    tel = '$cus_tel',
                    email = '$cus_email'
                    WHERE id = '$cus_id'";
        if(!mysqli_query($conn,$sql)){
            die("เกิดข้อผิดพลาดในการแก้ไขข้อมูลลูกค้า").mysqli_error();
        }else{
            echo "<script type='text/javascript'>alert('ระบบทำการแก้ไขข้อมูลลูกค้าเสร็จเรียบร้อย'); window.location.href='edit_cus.php';</script>";
        }
        mysqli_close($conn);

    ?>
</body>
</html>