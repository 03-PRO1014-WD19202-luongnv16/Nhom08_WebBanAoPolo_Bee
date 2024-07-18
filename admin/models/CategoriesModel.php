<?php
	trait CategoriesModel{
		//lay danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from category order by id desc limit $from,$recordPerPage");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from category");
			//ham rowCount: dem so ket qua tra ve
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from category where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$name = $_POST["name"];
			$name = str_replace('"', '\\"', $name);
			//update cot name
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update category set name=:_name,updated_at=now() where id=:_id");
			$query->execute([":_name"=>$name,":_id"=>$id]);
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$name = str_replace('"', '\\"', $name);
			//update cot name
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into category set name=:_name,created_at=now(),updated_at=now()");
			$query->execute([":_name"=>$name]);
			header("location:index.php?controller=categories");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("delete from category where id=$id");
		}
		//lay cac ban ghi categories
		public function modelListCategories($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from category where parent_id=0 and id <> $id order by id desc");
			return $query->fetchAll();
		}
		//lay cac ban ghi category con
		public function modelListCategoriesSub($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from category where parent_id=$category_id order by id desc");
			return $query->fetchAll();
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
