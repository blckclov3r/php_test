<?php
	include 'db.php';
	
	class DatabaseOperation extends Database{
		public function delete_record($table,$where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key."='".$value."';";
			}
		
			$sql = "DELETE FROM ".$table." WHERE ".$condition;
			if(mysqli_query($this->conn,$sql)){
				return true;
			}
			
		}
	}

	$obj = new DatabaseOperation();
	
	if(isset($_GET['delete'])){
		$id = $_GET['id'];
		$where = array(
			"id"=>$id
		);
		if($obj->delete_record("employees",$where)){
			header("location: index.php?successfully-deleted");
		}
	}

?>