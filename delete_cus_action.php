<?php
    include("connect.php");
    
    $cus_id = $_POST['cus_id'];
    $sql = "DELETE FROM customer WHERE id = '$cus_id'";

    if(!mysqli_query($conn,$sql)){
        die("เกิดข้อผิดพลาดในการลบข้อมูลลูกค้า");
    }else{
        echo "<script type='text/javascript'>alert('ระบบทำการลบข้อมูลลูกค้าเสร็จเรียบร้อย'); window.location.href='edit_cus.php';</script>";
    }

?>