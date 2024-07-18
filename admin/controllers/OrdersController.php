<?php
	include "models/OrdersModel.php";
	class OrdersController extends Controller{
		use OrdersModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 5;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
			//load view
			$this->loadView("OrdersView.php",["listRecord"=>$listRecord,"numPage"=>$numPage]);
		}

		//update
		public function update(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//tao bien action de xuat vao thuoc tinh action cua the form
			$action = "index.php?controller=orders&action=updatePost&id=$id";
			$record = $this->modelGetRecord($id);
			//goi view
			$this->loadView("OrdersFormView.php",["record"=>$record,"action"=>$action]);
		}

		//update - POST
		public function updatePost(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$this->modelUpdate($id);
			echo '<script>alert("Cập nhật thành công!");
			window.location.href="index.php?controller=orders";</script>';
		}
	}
 ?>
