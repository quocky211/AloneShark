<?php 

function construct() {
	load_model('index');
}

function infoAction(){
	$data=array();
	if(!empty($_SESSION['id_customer'])){
		$data[] = getUserById($_SESSION['id_customer']);
	}
	load_view('info',$data);
}

// update dử liệu thông tin tài khoản admin
function updateAction(){

    $fullname = $_POST['fullname'];
	$username= $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $data = [
        [
        'fullname' => $fullname,
		'username'=>$username,
        'mail' => $email,
        'phone' => $phone,
        'address' =>$address
        ]
    ];
    $num = updateUser($fullname,$username,$email,$phone,$address);
    if($num ==1){
        load_view('info',$data);
        echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
    }
    else {
        load_view('info',$data);
        echo " <script type='text/javascript'> alert('Thông Tin Đã Tồn Tại');</script>";
    }
}

function indexAction(){
	if(isset($_GET['report']))
		echo " <script type='text/javascript'> alert('Bạn cần đăng nhập để mua hàng');</script>";
	load_view('index');
}

function logoutAction(){
	logout();
	header('location:?modules=home');
}

function loginAction(){
	$username;
	$password;
	$err = array();
	if (!empty($_POST['btn_submit'])) {
		if (!empty($_POST['username'])) {
			$username = $_POST['username'];
		}else{
			$err['username'] = "username không được để rỗng";
		}

		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
		}else{
			$err['password'] = "password không được để rỗng";
		}

		if(empty($err)){
			if(checkLogin($username, $password)){
				$dataUser = getUser($username, $password);
				$_SESSION['id_customer'] = $dataUser['id'];
				$_SESSION['username'] = $dataUser['username'];
				$_SESSION['fullname'] = $dataUser['fullname'];
				header('location:?modules=home');
			}else{
				echo " <script type='text/javascript'> alert('Thông tin tải khoản không đúng!!!');</script>";
			}
		}else{
			echo " <script type='text/javascript'> alert('Bạn phải điền đầy đủ thông tin!!!');</script>";
		}
	}
	load_view('index');
}

function crateAcountAction(){
	$username;
	$password;
	$mail;
	$phone;
	$fullname;
	$address;
	$err = array();

	if(!empty($_POST['btn_submit_crate'])){
		if (!empty($_POST['username'])) {
			$username = $_POST['username'];
		}else{
			$err['username'] = "username không được để rỗng";
		}

		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
		}else{
			$err['password'] = "password không được để rỗng";
		}

		if (!empty($_POST['mail'])) {
			$mail = $_POST['mail'];
		}else{
			$err['mail'] = "mail không được để rỗng";
		}

		if (!empty($_POST['phone'])) {
			$phone = $_POST['phone'];
		}else{
			$err['phone'] = "phone không được để rỗng";
		}

		if (!empty($_POST['fullname'])) {
			$fullname = $_POST['fullname'];
		}else{
			$err['fullname'] = "fullname không được để rỗng";
		}

		if (!empty($_POST['address'])) {
			$address = $_POST['address'];
		}else{
			$err['address'] = "address không được để rỗng";
		}

		if(empty($err)){
			if(checkUser($username, $mail, $phone)){
				$create_date = date("d/m/Y",time());
				insertUser($username, $password, $fullname, $mail, $phone, $address, $create_date);
				echo " <script type='text/javascript'> alert('Đăng kí thành công! Vui lòng đăng nhập tài khoản');</script>";
				// header('location:?modules=home');
			}else{
				echo " <script type='text/javascript'> alert('Thông tin tài khoản đã tồn tại trên hệ thống!!!');</script>";
			}
		}else{
			echo " <script type='text/javascript'> alert('Bạn phải điền đầy đủ thông tin!!!');</script>";
		}
	}
	load_view('index');
}
 ?>