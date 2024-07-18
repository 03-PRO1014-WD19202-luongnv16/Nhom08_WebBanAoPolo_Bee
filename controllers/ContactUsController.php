<?php
	include "models/ContactUsModel.php";
	class ContactUsController extends Controller{
		use ContactUsModel;

		public function index(){
			$this->loadView("ContactUsView.php");
		}

		public function contactPost(){
			$this->modelContact();
		}

		public function mailbox(){
			//quy dinh so ban ghi mot trang
			$recordPerPage = 5;
			//tinh so trang
			//ham ceil la ham lay tran. VD: ceil(2.1) = 3
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//lay danh sach cac ban ghi co phan trang
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("MailboxView.php",["data"=>$data,"numPage"=>$numPage]);
		}
	}
 ?>