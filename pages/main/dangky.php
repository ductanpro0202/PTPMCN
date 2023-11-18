<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['email'] = $email;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
	}
?>

  
    <div class="container">
        <h2>Đăng ký</h2>
        <form action="" method="post">
            <label for="fullname">Họ Tên:</label>
            <input type="text" id="fullname" name="hovaten" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Điện thoại:</label>
            <input type="tel" id="phone" name="dienthoai" required><br>

            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="diachi" required><br>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="matkhau" required><br>

            <input type="submit" name = "dangky" value="Đăng ký">
            
        </form>
        <a href="index.php?quanly=dangnhap"><button>Đăng nhập nếu có tài khoản</button></a>
    </div>

    <style>
        .container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fce4ec; /* Màu hồng nhạt */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #ff4081; /* Màu hồng */
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #ff4081; /* Màu hồng */
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"],
input[type="submit"] {
    width: calc(100% - 12px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ff4081; /* Viền màu hồng */
    border-radius: 4px;
    background-color: #fff; /* Màu nền trắng cho input */
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #ff4081; /* Màu viền khi focus */
    box-shadow: 0 0 5px rgba(255, 64, 129, 0.5); /* Hiệu ứng shadow khi focus */
}

input[type="submit"] {
    background-color: #ff4081; /* Màu nền của nút submit */
    color: #fff; /* Màu chữ trắng */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #d81b60; /* Màu nền hover */
}

a button {
    background-color: #fff; /* Màu nền của button đăng nhập */
    color: #ff4081; /* Màu chữ của button đăng nhập */
    border: 1px solid #ff4081;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

a button:hover {
    background-color: #ff4081; /* Màu nền hover của button đăng nhập */
    color: #fff; /* Màu chữ hover của button đăng nhập */
    cursor: pointer;
}

    </style>

