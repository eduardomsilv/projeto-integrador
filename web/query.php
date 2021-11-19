<?php
class ControllerDb{
private $host = "ec2-54-146-82-179.compute-1.amazonaws.com";
private $user = "cgsrrdqwaebszj";
private $password = "41d829fb46cb232199d096442689af52ca6ce9defb07e745599fd8462de8ba64";
private $database = "d6joleaq8f4sk2";
private $conn;



function connectDb(){
$conn = pg_connect("host=$this->host dbname=$this->database user=$this->user password=$this->password")or
die("Failed to create connection to database: ". pg_last_error(). "<br/>");
}

function construct(){
$this->conn = $this->connectDb();
}
}
?>