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
    <title>สถานะการเข้าชั้นเรียน</title>
</head>

<body>
                
<?php
require ('navbar_teacher.php'); // ดึงค่า Navigation Bar มาแสดง แต่ไม่สามารถกด dropdown ได้ 

// ส่วนของเนื้อหาที่ต้องนำมาแสดงที่หน้าเว็บ Body
require ('submenu.php'); // Submenu ที่อยู่ฝั่งซ้ายของเว็บไซต์
echo "<div class =\"container col-7\">
<center><h3>สถานะการเข้าชั้นเรียนในรายวิชา subname</h3></center>
  <center><table border=\"1px\"class=\"table  \">
     <thead class=\"thead-dark\">
         <th class=\"text-align:center;\">รหัสนักศึกษา</th>
         <th class=\"text-align:center;\">01/04/62</th>
         <th class=\"text-align:center;\">08/04/62</th>
         <th class=\"text-align:center;\">15/04/62</th>
         <th class=\"text-align:center;\">22/04/62</th>
         <th class=\"text-align:center;\">29/04/62</th>
    </thead>
    <tbody>
        <tr><td>5950110021</td>
        <td style=\"background:#ff4116;\">0</td>
        <td style=\"background:#ff4116;\">0</td>
        <td style=\"background:#79bf23;\">1</td>
        <td></td>
        <td></td>
    </tr>
        <tr><td>5950110023</td>
        <td style=\"background:#79bf23;\">1</td>
        <td style=\"background:#ff4116;\">0</td>
        <td style=\"background:#ff4116;\">0</td>
        <td></td>
        <td></td>
    </tr>
        <tr><td>5950110076</td>
        <td style=\"background:#79bf23;\">1</td>
        <td style=\"background:#ff4116;\">0</td>
        <td style=\"background:#79bf23;\">1</td>
        <td></td>
        <td></td>
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