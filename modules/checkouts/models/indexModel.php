<?php 

//check thông tin đăng nhập 
function checkLogin($username,$password){

	$sql = "SELECT * FROM `tbl_customer` WHERE `username` = '{$username}' AND `password` = '{$password}'";
	return db_num_rows($sql);
	
}

// lấy thông tun tài khoản theo tên đăng nhập
function getUserByUsername($username,$password){

	return db_fetch_array("SELECT * FROM `tbl_customer` WHERE `username` = '{$username}' AND `password` = '{$password}'");

}

// update thông tin tài khoản 
function updateUser($fullname, $username,$mail,$phone,$address){

	$data = [
		'fullname' => $fullname,
		'username' => $username,
		'mail' => $mail,
		'phone' => $phone,
		'address' =>$address
	];
	return db_update('tbl_customer', $data, "`username` = '{$username}'");
}

// thay đổi mật khẩu 
function changePass($password,$password1){

	$data = [
		'password' => $password
	];
	return db_update('tbl_customer', $data, "`password` = '{$password1}'");
}



function getUserById($id){
	return db_fetch_row("SELECT * FROM `tbl_customer` WHERE `id` = '$id'");
}

function getListOrder($id_customer){
	return db_fetch_array("SELECT * FROM `tbl_order` WHERE `custom_id` = '$id_customer'");
}

function getListOrderByIDOrder($id){
	return db_fetch_array("SELECT * FROM `tbl_detail_order` WHERE `id_order` = '$id'");
}

function getProductByID($id){
	return db_fetch_row("SELECT * FROM `tbl_product` WHERE `id` = '$id'");
}

function insertOrder($custom_id, $total_price, $total_num_product,$create_date, $note, $payment_method, $status,$id_cart,$time,$code){
	$data = [
		'custom_id ' =>$custom_id ,
		'total_price' => $total_price,
		'total_num_product' => $total_num_product,
		'create_date' => $create_date,
		'note' => $note,
		'payment_method' => $payment_method,
		'status' => $status,
		'id_cart' => $id_cart,
		'time' => $time,
		'code' => $code
	];
	db_insert("tbl_order", $data);
}

function deletecart(){
	$id_customer = $_SESSION['id_customer'];
	$data_cart = db_fetch_row("SELECT * FROM `tbl_cart`WHERE `id_customer` = '$id_customer'");
	$id_cart = $data_cart['id'];
	db_delete('tbl_detail_cart', "`id_cart`='$id_cart'");
	$data = ['total_num'=>0, 'total_price'=>0];
	db_update('tbl_cart', $data, "`id_customer` = '$id_customer'");
	unset($_SESSION['cart']);
}

function inserOderDetail($id_order , $id_product , $qty, $sub_total_price){
	$data = [
		'id_order' => $id_order,
		'id_product' => $id_product,
		'qty' => $qty,
		'sub_total_price' => $sub_total_price
	];
	db_insert("tbl_detail_order", $data);
}

function sendMail($id_order){
	$data = db_fetch_row("SELECT * FROM `tbl_order` WHERE `id` = '$id_order'");
	$data_product =  db_fetch_array("SELECT * FROM `tbl_detail_order` WHERE `id_order` = '$id_order'");
	$send_mail = "";
}

 ?>