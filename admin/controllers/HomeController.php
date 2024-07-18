<?php
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//ham tao - check login
		use HomeModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>
