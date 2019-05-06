<?php 
// class DBConnector
// {
// 	public $host = 'localhost';
// 	public $dbname ='final_ass';
// 	public $un ='root';
// 	public $pw ='';
// 	public function  runQuery($sql) {
// 		$conn = new mysqli($this->host,$this->un,$this->pw,$this->dbname);
// 		$result = $conn -> query($sql); 
// 		$rows = mysqli_fetch_all($result,MYSQLI_ASSOC); 
// 		$conn -> close(); 
// 		return $rows;
// 	}
// 	public function execStatement($sql) {
// 		$conn = new mysqli($this->host,$this->un,$this->pw,$this->dbname);
// 		$result = $conn ->query($sql);
// 		$conn -> close(); 
// 	}
// }
 ?>

<?php 
class DBConnector{
	//ket noi co so du lieu
	public $hostname ='localhost';
	public $username='root';
	public $password='';
	public $dbname='final_ass';
	public $port=3306;
	public function runQuery($sql)
	{
		$conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname, $this->port);
		if($conn->connect_error)
		{
			//neu nhu ket noi khong thanh cong thi dung chuong trinh
			echo "Connection fail<br>";
			//dung chuong trinh
			die($conn->connect_error);
		}
	
		//chay cau truy van lay ket qua
		$result = $conn->query($sql);
		if(!$result)
		{
			//Neu khong co ket qua ($result=null) thi dung chuong trinh
			echo "SQL execution fail <br>";
			die($conn->error);
		}
		//lay tat ca cac ban ghi tu ket qua
		$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
		return $rows;
	}
	public function execStatement($sql)
	{
		$conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname, $this->port);
		if($conn->connect_error)
		{
			//neu nhu ket noi khong thanh cong thi dung chuong trinh
			echo "Connection fail<br>";
			//dung chuong trinh
			die($conn->connect_error);
		}
	
		//chay cau truy van lay ket qua
		$result = $conn->query($sql);
		return $result;
	}
}
?>