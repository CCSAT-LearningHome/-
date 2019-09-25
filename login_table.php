<?php
// 创建连接
$conn = new mysqli("localhost", "uesename", "password","test");
// 检测连接
if ($conn->connect_error) 
{    
die("连接失败: " . $conn->connect_error);
} 
// 使用 sql 创建数据表
$sql = "CREATE TABLE login (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,)ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
if ($conn->query($sql) === TRUE) 
{    
echo "Table MyGuests created successfully";
} else {    
echo "创建数据表错误: " . $conn->error;
}
$conn->close(); 
?>