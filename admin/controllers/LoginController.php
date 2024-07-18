<?php
	//load file model
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//ke thuc class LoginModel
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
			//goi ham modelLogin tu class LoginModel
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			if (isset($_COOKIE['tendangnhap_admin']) && ($_COOKIE['matkhau_admin'])) {
				setcookie("tendangnhap_admin", "", time() - 30 * 24 * 60 * 60, '/');
				setcookie("matkhau_admin", "", time() - 30 * 24 * 60 * 60, '/');
				header('Location: index.php');
			}
		}
	}
 ?>
