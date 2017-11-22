<?php 
class Conmysql{
	public $servername ;
	public $username;
	public $password;
	public $dbname;
	public $conn = '';
	public function _constructor(servername,$username,$password,$dbname){
		$this -> servername = $servername;
		$this -> username = $username;
		$this -> password = $password;
		$this -> dbname = $dbname;
	}

	//链接数据库
	public function connectDB(){
		try {
		    $this -> conn = new PDO("mysql:host=$this -> servername;dbname=$this -> dbname", $this -> username, $this -> password);
		    echo "连接成功"; 
		}
		catch(PDOException $e)
		{
		    echo $e->getMessage();
		}
	}
	//更新
	public function updateDate(){

	}
	//关闭链接
	public function closeCon(){
		$this -> conn = null;
	}
}



 ?>}
