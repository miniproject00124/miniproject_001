<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject_001";

//สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password, $dbname);

//ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error)
{
    die("connection failed : " . $conn->connect_error);
}
?>