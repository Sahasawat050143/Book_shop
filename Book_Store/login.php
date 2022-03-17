<?php
    session_start();
    if(isset($_POST['email'])){
        if(isset($_POST['password'])){
            include("connect.php");
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = " SELECT * FROM tbllogin WHERE email = '".$email."' AND log_password = '".$password."'";

            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)!=0){
                Header("Location: admin_page.php");
                $rows = mysqli_fetch_array($result); 
                $_SESSION["email"] = $rows["email"];
                // while($row = $result->fetch_assoc()) {
                //     echo $row['email'];
                //     echo $row['log_password'];
                //    }
            }
            else{
                echo "<script> alert(\" รหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบ \"); </script>";
                session_destroy();
            }
        }
    }
    else{
        Header("Location: index.php");
    }
	mysqli_close($conn);
?>