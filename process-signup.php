<?php
    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignup'])){
        header("location:Signup.php");
    }
        $user = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $email1 = $_POST['txtEmail1'];
        $pass1 = $_POST['txtPass'];
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','spotify');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email' AND  matkhau='$pass1'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result01 = mysqli_query($conn,$sql01);
        if(mysqli_num_rows($result01) > 0){
            $error = "Tài khoản hoặc mật khẩu không tồn tại";
            header("location: Signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }else{
            $pass_md5 = md5($pass1);
            $sql02 = "INSERT INTO db_nguoidung(tendangnhap , email, matkhau) VALUE('$user' ,'$email1','$pass_md5')";
            $result02 = mysqli_query($conn,$sql02);
        }
        if($result02== true) {
            header("location:Signup.php");

        }
        else{
            $error = "Can not insert record";
            header("location: Signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
   
?>


