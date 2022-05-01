<?php
	if (isset($_POST['dang_ki'])) {
		$ten_khach_hang = $_POST['ten_khach_hang'];
		$email = $_POST['email'];
		$mat_khau = $_POST['mat_khau'];
		$re_pass = $_POST["re_mat_khau"];
   
	} $gioi_tinh = $_POST['gioi_tinh'];
    $dia_chi = $_POST['dia_chi'];
    $sdt = $_POST['sdt'];
	require 'connect.php';
	if ($ten_khach_hang == "" ||$mat_khau == ""|| $email == "") {
				   header('location:form_dang_ki.php?error= bạn vui lòng nhập đầy đủ thông tin');
	  }
	  else{
  			$sql="select * from khach_hang where email='$email'";
  			$result = mysqli_query($connect, $sql);
  			$kt = mysqli_num_rows($result);
  		if($kt>0){
  			header('location:form_dang_ki.php?error= tài khoản này đã tồn tại');
  		} 

      if($mat_khau != $re_pass){
        header('location:form_dang_ki.php?error= mật khẩu không giống nhau');
      }

      else{
  			$sql1 = "insert into khach_hang(ten_khach_hang,email,mat_khau,gioi_tinh,dia_chi,sdt) values ('$ten_khach_hang','$email','$mat_khau','$gioi_tinh','$dia_chi','$sdt')";
  			mysqli_query($connect,$sql1);

  			header('location:form_login.php?infor=Đăng kí thành công ');
  		}
  	}
    mysqli_close($connect);
