<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_action</title>
</head>
<body>
    <?php
        include('connect.php');
        $_email = $_POST["s_email"];
        $_password = $_POST["s_password"];
        $_password_repeat = $_POST["s_password_repeat"];

        $check = "SELECT * FROM tbllogin WHERE email = '$_email'";
        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result)==1){
            echo "<script type='text/javascript'>alert('มีรหัสนี้อยู่ในระบบแล้ว'); window.location.href='sign_up.php';</script>";
        }
        else if($_password != $_password_repeat){
            echo "<script type='text/javascript'>alert('กรุณาป้อนรหัสผ่านให้เหมือนกัน'); window.location.href='sign_up.php';</script>";
        }
        else{
            $sql = "INSERT INTO tbllogin(email,log_password)values('$_email','$_password') ";
            
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>alert('บันทึกรหัสผ่านเรียบร้อย'); window.location.href='index.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('บันทึกรหัสผ่านไม่สำเร็จ'); window.location.href='sign_up.php';</script>";
            }
        }
        mysqli_close($conn);

    ?>    
</body>
</html>