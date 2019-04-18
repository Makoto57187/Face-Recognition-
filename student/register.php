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
    <title>ผลการลงทะเบียน</title>
</head>

<body>
    <?php
    require ('navbar_student.php'); // ดึงค่า Navigation Bar มาแสดง แต่ไม่สามารถกด dropdown ได้ 

    // ส่วนของเนื้อหาที่ต้องนำมาแสดงที่หน้าเว็บ Body
    
             echo"<div class =\"container col-6\">
                    <center><h3>รายวิชาที่ลงทะเบียน subname</h3></center><hr>
                      <center><table width=\"80%\">
                         <thead align=\"center\">
                             <th>รหัสวิชา</th>
                             <th>ชื่อรายวิชา</th>
                             <th>section</th>
                        </thead>
                        <tbody align=\"center\">
                            <tr>
                            <td>948-341 </td>
                            <td><li class=\"nav-item nav-link\"><a href=\"display_data_sub.php\" class=\"text-dark\">SOFTWARE ENGINEERING</a></li></td>
                            <td>1</td>
                            <td><input type=\"button\" value=\"ถอนรายวิชา\" class=\"btn btn-info\" ></a></td>
                        </tr>
                        <tr align=\"center\">
                            <td>942-234 </td>
                            <td>BUSINESS LAW</td>
                            <td>2</td>
                            <td><input type=\"button\" value=\"ถอนรายวิชา\" class=\"btn btn-info\"></a></td>
                        </tr>
                        </tbody>
                    </table></center>
                </div>";
    ?>
     </div>
     
</body>

</html>