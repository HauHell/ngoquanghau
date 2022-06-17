<?php  
class database{

	//DB Params
	private $dns = "mysql:host=brwirybbvjmkcqjahsxk-mysql.services.clever-cloud.com;dbname=brwirybbvjmkcqjahsxk";
	private $username = "u7rm2au2auzxqlfx";
	private $password = "yWKVOW9fs8keV5xRQ1nv";
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

