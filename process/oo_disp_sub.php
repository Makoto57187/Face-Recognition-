<?php
//รับค่ารหัสแผนกจากฟอร์ม

$dept_no =$_REQUEST['dept_no'];
//ดึงส่วนของการติดต่อฐานข้อมูลจากไฟล์ conn_mysql
require('mysql_conn.php');

$query ="SELECT *FROM dept1 where dept_no='$dept_no'";
//สั่งให้ SQL ทำงาน
$result =$mysqli->query($query)or die("Query failed");

//ดึงข้อมูลมาใส่ตัวแปร
$row = $result->fetch_array();
$dept_no =$row["dept_no"];
$dept_name =$row["dept_name"];

echo "<b>แก้ไขข้อมูลของรหัสแผนก $dept_no</b>";

// สร้างฟอร์มสำหรับรับข้อมูลใหม่
echo "<form action=\"oo_upd_dept.php\" method=\"post\">";
echo "<input type=\"hidden\" name=\"dept_no\" value=\"$dept_no\">";
echo "ชื่อแผนก : <input type =\"text\" name=\"dept_name\" value=\"$dept_name\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\">";
echo "</form>";

//จบการติดต่อฐานข้อมูล
$result->free();
$mysqli->close();
?>