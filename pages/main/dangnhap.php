<?php
// session_start();
//include('config/config.php');
if(isset($_POST['dangnhap'])){
    $email=$_POST['email'];
    $matkhau=$_POST['password'];
    $sql ="SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $row_data=mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['id_khachhang']=$row_data['id_dangky'];
        header("Location:index.php?quanly=giohang");
    }else{
        echo "Mật khẩu hoặc tài khoản sai";
    }
}
?>

<div class="container">
    <h2>Đăng nhập</h2>
    <form action="" method="POST" id="loginForm">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="dangnhap" value="Đăng nhập">
    </form>
</div>
<style>
    /* CSS */
.container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff; /* Màu nền trắng cho phần container */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Hiệu ứng bóng đổ */
}

h2 {
    color: #ff4081; /* Màu hồng */
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #ff4081; /* Màu hồng cho label */
}

input[type="email"],
input[type="password"],
input[type="submit"] {
    width: calc(100% - 12px); /* Chiều rộng của input trừ đi viền */
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc; /* Viền mặc định */
    border-radius: 4px;
}

input[type="email"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #ff4081; /* Màu viền khi focus */
    box-shadow: 0 0 5px rgba(255, 64, 129, 0.5); /* Hiệu ứng shadow khi focus */
}

input[type="submit"] {
    background-color: #ff4081; /* Màu nền của nút submit */
    color: #fff; /* Màu chữ trắng */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền */
}

input[type="submit"]:hover {
    background-color: #d81b60; /* Màu nền hover */
}
</style>


