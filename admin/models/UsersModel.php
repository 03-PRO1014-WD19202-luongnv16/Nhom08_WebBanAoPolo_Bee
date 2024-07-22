<?php
	trait UsersModel{
		public function modelRead($recordPerPage){
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			$from = $page * $recordPerPage;
			$conn = Connection::getInstance();
			$query = $conn->query("select * from user limit $from,$recordPerPage");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelTotal(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from user");
			return $query->rowCount();
		}
		public function modelGetRecord($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from user where id_user=$id");
			return $query->fetch();
		}
		public function modelUpdate($id){
			$fullname = '';
			if (isset($_POST['fullname'])) {
				$fullname = $_POST['fullname'];
				$fullname = str_replace('"', '\\"', $fullname);
			}
			if (isset($_POST['id_user'])) {
				$id_user = $_POST['id_user'];
			}
			if (isset($_POST['tendangnhap'])) {
				$tendangnhap = $_POST['tendangnhap'];
				$tendangnhap = str_replace('"', '\\"', $tendangnhap);
			}
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
				$email = str_replace('"', '\\"', $email);
			}
			if (isset($_POST['diachi'])) {
				$diachi = $_POST['diachi'];
				$diachi = str_replace('"', '\\"', $diachi);
			}
			if (isset($_POST['matkhau'])) {
				$matkhau = $_POST['email'];
				$matkhau = str_replace('"', '\\"', $matkhau);
			}
			if (isset($_POST['dienthoai'])) {
				$dienthoai = $_POST['dienthoai'];
				$dienthoai = str_replace('"', '\\"', $dienthoai);
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update user set fullname=:_fullname, tendangnhap=:_tendangnhap, email=:_email, matkhau=:_matkhau, diachi=:_diachi, dienthoai=:_dienthoai where id_user=:_id");
			$query->execute([":_fullname"=>$fullname,":_tendangnhap"=>$tendangnhap,":_email"=>$email,":_matkhau"=>$matkhau,":_diachi"=>$diachi,":_dienthoai"=>$dienthoai,":_id"=>$id]);
		}
		public function modelCreate(){
			$fullname = '';
			if (isset($_POST['fullname'])) {
				$fullname = $_POST['fullname'];
				$fullname = str_replace('"', '\\"', $fullname);
			}
			if (isset($_POST['id_user'])) {
				$id_user = $_POST['id_user'];
			}
			if (isset($_POST['tendangnhap'])) {
				$tendangnhap = $_POST['tendangnhap'];
				$tendangnhap = str_replace('"', '\\"', $tendangnhap);
			}
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
				$email = str_replace('"', '\\"', $email);
			}
			if (isset($_POST['diachi'])) {
				$diachi = $_POST['diachi'];
				$diachi = str_replace('"', '\\"', $diachi);
			}
			if (isset($_POST['matkhau'])) {
				$matkhau = $_POST['email'];
				$matkhau = str_replace('"', '\\"', $matkhau);
			}
			if (isset($_POST['dienthoai'])) {
				$dienthoai = $_POST['dienthoai'];
				$dienthoai = str_replace('"', '\\"', $dienthoai);
			}
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into user set fullname=:_fullname, tendangnhap=:_tendangnhap, email=:_email, matkhau=:_matkhau, diachi=:_diachi, dienthoai=:_dienthoai");
			$query->execute([":_fullname"=>$fullname,":_tendangnhap"=>$tendangnhap,":_email"=>$email,":_matkhau"=>$matkhau,":_diachi"=>$diachi,":_dienthoai"=>$dienthoai]);
		}
		//xoa ban ghi
		public function modelDelete($id){
			$conn = Connection::getInstance();
			$conn->query("delete from user where id_user=$id");
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
	}
 ?>
