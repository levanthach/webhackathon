<?php

	require_once("connect.php");
	// kiem tra user da nhan nut dnag nhap thi moi xu ly
	if (isset($_POST["login_submit"])) {

		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];	 

		if($username == "" || $password == "")
		{
			echo 'username hoặc password không được để trống!';
		}
		else {
			$sql = " SELECT username,password FROM mamber WHERE username ='$username' AND password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows == 0){
				echo '<script language="javascript"> ';
				echo 'alert("Tên tài khoản hoặc mật khẩu không chính xác")';
				echo '</script>';
				include "index.php";
			}
			else {
				// Tien hanh luu ten dang nhap vao session de tien xu ly sau nay	
				$_SESSION['username'] = $username;
				header('Location: user.php');
				// Thực thi hành động sau khi lưu thông tin vào session                 
			}
		}
	}
 ?>