<?php

	include 'db.php';

	class DatabaseOperation extends Database{
		public function insert_record($table,$field){
			$sql = "";
			$sql .= "INSERT INTO ".$table;
			$sql .= "(".implode(",", array_keys($field)).") VALUES ";
			$sql .= "('".implode("','", array_values($field))."')";
			// echo $sql;
			$query = mysqli_query($this->conn,$sql);
		
			if($query){
				return true;
			}else{
				return false;
			}
		}

		public function fetch_record($table){
			$sql = "SELECT * FROM ".$table;
			$array = array();
			$query = mysqli_query($this->conn, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
		}

		public function select_record($table,$where){
			$sql = "";
			$condition = "";
			foreach($where as $key=>$value){
				$condition .= $key ."='".$value."' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
			// echo $sql;
			$query = mysqli_query($this->conn,$sql);
			$row = mysqli_fetch_array($query);
			return $row;
		}
	}

	$obj = new DatabaseOperation();

	if(isset($_POST['submit'])){
		$arr = array(
			"name"=> $_POST['fname'],
			"email"=>$_POST['email'],
			"phone"=>$_POST['phone'],
			"address"=>$_POST['address'],
			"sex"=>$_POST['sex'],
			"employeeType"=>$_POST['employeeType']
		);

		if($obj->insert_record("employees",$arr)){
			header("location: index.php?msg=successfully_inserted");
		}else{
			header("location: index.php?msg=insert-error");
		}
	}


?>