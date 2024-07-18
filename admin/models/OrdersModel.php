<?php
	trait OrdersModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from orders, order_details, product
                                            where order_details.order_id=orders.id and product.id=order_details.product_id ORDER BY order_date DESC limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from orders");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}

		public function modelFeatureProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from product");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelFeatureUser(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from user");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelFeatureOrderDetail(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from order_details");
			$result = $query->fetchAll();
			return $result;
		}

		public function modelGetCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from category");
			$result = $query->fetchAll();
			return $result;
		}

		public function modelUpdate($id){
			$status = $_POST["status"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update order_details set status=:_status where order_id=:_id");
			$query->execute([":_status"=>$status,":_id"=>$id]);
		}

		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * from orders, order_details, product
                                                where order_details.order_id=orders.id and product.id=order_details.product_id and order_id=$id");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
	}
 ?>
