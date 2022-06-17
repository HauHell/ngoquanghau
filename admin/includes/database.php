<?php  
class database{

	//DB Params
	private $dns = "mysql:host=biwfzsvd8dgt2omqooon-mysql.services.clever-cloud.com;dbname=biwfzsvd8dgt2omqooon";
	private $username = "ubuzsmboajwvn69o";
	private $password = "7Oi6JfsNyoAbwlR6U1Yd";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

