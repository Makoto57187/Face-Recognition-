<?php
// ดึงส่วนของการติดต่อฐานข้อมูลจากไฟล์ oo_mysql_conn.php
require('mysql_conn.php');

// สร้างคำสั่ง SQL ที่จะใช้งาน
$query ="SELECT * FROM dept1 order by dept_no";

//สั้งให้ SQL ทำงาน
$result = $mysqli->query($query)or die("Query failed");

//ตรวจสอบจำนวนข้อมูล
if($result->num_rows == 0){
echo "Nothing to Display!";
}

print "<table border =1> \n";
echo "<tr><th>รหัสแผนก</th><th>ชื่อแผนก</th><th colspan ='2'>เลือกทำงาน</th></tr>";

while($row =$result->fetch_array()){
    //แสดงข้อมูลในแต่ละแถวของตาราง
    echo "<tr>";
        echo "<td>",$row["dept_no"],"</td>\n";
        echo "<td>",$row["dept_name"],"</td>\n";
        $dept_no =$row["dept_no"];

    //สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่แสดงข้อมูลสำหรับแก้ไขพร้อมส่งข้อมูลรหัสแผนก
        echo "<td> <a href =\"oo_disp_dept.php?dept_no=$dept_no\">Edit</a></td>\n";

    // สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่ลบข้อมูลพร้อมส่งข้อมูลรหัสแผนก
        echo "<td><a href=\"oo_del_dept.php?dept_no=$dept_no\">Delete</a></td>\n";
        echo "\t</tr>\n";
}
echo "</table>\n";
// แสงดจำนวนข้อมูลที่ดึงมาได้
echo "จำนวนข้อมูลทั้งหมด : ",$result->num_rows," รายการ<br>";
// จบการติดต่อฐานข้อมูล
$result->free_result();
$mysqli->close();
?>