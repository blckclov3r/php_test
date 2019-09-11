
<?php
	class Database{
		public $conn;
		public function __construct(){
			$this->conn = mysqli_connect("localhost","root","","gruneasia_devtest");
			if(!$this->conn){
				echo "Not connected ".mysqli_connect_error();
			}else{
				// echo "Successfully connected";
			}
		}
	}

	$obj = new Database();

	
?>