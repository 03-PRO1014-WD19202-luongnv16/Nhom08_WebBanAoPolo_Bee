<?php
	//load file model
	include "models/AccountModel.php";
	class AccountController extends Controller{
		//ke thua class model
		use AccountModel;
		public function register(){
			$this->loadView("AccountRegisterView.php");
		}
		public function registerPost(){
			//goi ham model de insert ban ghi
			$this->modelRegister();
		}
		public function login(){
			$this->loadView("AccountLoginView.php");
		}
		public function loginPost(){
			//goi ham model de kiem tra dang nhap
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			if (isset($_COOKIE['tendangnhap']) && ($_COOKIE['tendangnhap'])) {
				setcookie("tendangnhap", "", time() - 30 * 24 * 60 * 60, '/');
				setcookie("matkhau", "", time() - 30 * 24 * 60 * 60, '/');
				setcookie("cart", "", time() - 30 * 24 * 60 * 60, '/');

			}
			if (isset($_COOKIE['tendangnhap_admin']) && ($_COOKIE['matkhau_admin'])) {
				setcookie("tendangnhap_admin", "", time() - 30 * 24 * 60 * 60, '/');
				setcookie("matkhau_admin", "", time() - 30 * 24 * 60 * 60, '/');
			}
			header("location:index.php");
		}

		public function changePass(){
			$this->loadView("AccountChangePassView.php");
		}

		public function changePassPost(){
			//goi ham model de kiem tra dang nhap
			$this->modelChangePass();
		}
	}
 ?>