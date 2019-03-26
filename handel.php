<?php 
		require_once('connect.php');
		if(isset($_POST["submit"])) {
			//lay du lieu tu file register.php
			$username = $_POST["txtUsername"];
			$password = $_POST["txtPassword"];
			$email = $_POST["txtEmail"];	
			// kiem tra user da nhap du du lieu hay chua 
			if(!$username || !$password || !$email) {
				echo "Vui lòng nhập đầy đủ thông tin";
			}
			else {
				//luu thong tin thanh vien vao bang
				$addmember = "INSERT INTO mamber(
					username,  
					password,
					email
				) VALUES (
					'$username',
					'$password',
					'$email'
				)";
		    	mysqli_query($conn,$addmember);
			}
		}
	 	// thong bao qua trinh luu
	 	if ('$addmember')
	        echo "Quá trình đăng ký thành công !";
	    else
	        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
 ?>