<?php
class opmysql{
	private $host;
	private $name;
	private $pwd;
	private $conn; 
	private $db;
	private $result;
	private $rowsArray;
public function __construct($host,$name,$pwd,$db){
	$this->host=$host;
	$this->name=$name;
	$this->pwd=$pwd;
	$this->db=$db;
	$this->connect();
}	
public function connect(){
	$this->conn=mysql_connect($this->host,$this->name,$this->pwd);
	mysql_select_db($this->db);
	mysql_query("set names gb2312");
}
public function query($sql){
	$this->result=mysql_query($sql,$this->conn);//工具类
}       
public function numRst($sql){
	$this->query($sql);	
	return mysql_num_rows($this->result);
}
public function select_array($sql){
	$this->query($sql);
	return mysql_fetch_array($this->result,MYSQL_ASSOC);//查询多条数据
}
public function getRowsArray($sql){
	$this->query($sql);
	while ($row=mysql_fetch_array($this->result,MYSQL_ASSOC)){
		$this->rowsArray[]=$row;
	}
	return $this->rowsArray;
}
public function uidRst($sql){
	$this->query($sql);
	$this->rowsNum=mysql_affected_rows();
	return $this->rowsNum;
}
public function close_conn(){
	$this->close_rst();
	mysql_close($this->connect());
}
}
$conne=new opmysql("localhost","root","","db_member");
?>