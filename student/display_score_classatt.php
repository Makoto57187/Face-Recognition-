<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper_1_14_3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" 
    integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous"><!--การเรียกใช้ Code icon สามารถเลือกใช้ได้เลย-->
    <!--ลองไปศึกษา Javascript ดูเพราะปัจจุบันสำคัญมาก-->
    <title>คะแนนการเข้าชั้นเรียน</title>
</head>

<body>

               
<?php
require ('navbar_student.php'); // ดึงค่า Navigation Bar มาแสดง แต่ไม่สามารถกด dropdown ได้ 

// ส่วนของเนื้อหาที่ต้องนำมาแสดงที่หน้าเว็บ Body
require ('submenu.php'); // Submenu ที่อยู่ฝั่งซ้ายของเว็บไซต์
    echo " <div class =\"container col-7\">
                <center><h3>คะแนนของนักศึกษาในรายวิชา subname</h3></center>
                <center><table border=\"1px\" class=\"table\">
                    <thead class=\"thead-dark\">
                        <th class=\"style=\"text-align:center;\">รหัสนักศึกษา</th>
                        <th class=\"style=\"text-align:center;\">ชื่อ นามสกุล</th>
                        <th class=\"style=\"text-align:center;\">ขาดเรียน</th>
                        <th class=\"style=\"text-align:center;\">เข้าเรียน</th>
                        <th class=\"style=\"text-align:center;\">คะแนนเต็ม</th>
                        <th class=\"style=\"text-align:center;\">คะแนนที่ได้</th>
                       
                    </thead>
                    <tbody>
                        <tr><td>5950110023</td>
                        <td>นาย ปริวัฒน์ เขียวบม</td>
                        <td class=\"style=\"text-align:center;\">2</td>
                        <td class=\"tyle=\"text-align:center;\">1</td>
                        <td class=\"style=\"text-align:center;\">5.0</td>
                        <td class=\"style=\"text-align:center;\">1.0</td>
                        </tr>
                    </tbody>
                </table></center>
            </div>";
    echo "<div class=\"col-1\">
        </div>"; // ส่วนพื้นที่ข้างหลัง ของเนื้อหาเพื่อที่จะไม่ให้ติดกับด้านข้างของข้างขวา
    echo "</div>";
?>
</body>

</html>