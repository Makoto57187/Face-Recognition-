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
    <title>ข้อมูลรายวิชา</title>
</head>

<body>
<?php
    require ('navbar_student.php'); // ดึงค่า Navigation Bar มาแสดง แต่ไม่สามารถกด dropdown ได้ 

    // ส่วนของเนื้อหาที่ต้องนำมาแสดงที่หน้าเว็บ Body
    require ('submenu.php'); // Submenu ที่อยู่ฝั่งซ้ายของเว็บไซต์
    echo "<div class=\"col-7 card p-4\">
    <H1>ข้อมูลรายวิชา subname$</H1><br>
        <fieldset>
        <form action=\"editdata_subject.html\" method=\"POST\" class=\"\">
        <div class=\"form-row\">
           <label class=\"col-sm-2 col-form-label col-form-label text-right my-2\">รหัสวิชา</label>
           <input type=\"text\" name=\"sub_id\" class=\"col-4 form-control-sm my-2\" value=\"948-341\" readonly><br>
        </div>
        <div class=\"form-row\">
           <label class=\"col-sm-2 col-form-label col-form-label text-right my-2\">ชื่อวิชา</label>
           <input type=\"text\" name=\"sub_name\" class=\"col-4 form-control-sm my-2\" value=\"SOFTWARE ENGINEERING\" readonly ><br>
        </div>
        <div class=\"form-row\">
           <label class=\"col-sm-2 col-form-label col-form-label text-right my-2\">section </label>
           <input name=\"sec\" class=\"col-4 form-control-sm my-2\" value=\"1\" readonly><br>
        </div>
        <div class=\"form-row\">
           <label class=\"col-sm-2 col-form-label col-form-label text-right my-2\">เทอม</label> 
           <input name=\"term\" class=\"col-4 form-control-sm my-2\" value=\"1\" readonly><br>
        </div>
        <div class=\"form-row\">
            <label class=\"col-sm-2 col-form-label col-form-label text-right my-2\">ปีการศึกษา</label> 
           <input type=\"text\" name=\"year\" class=\"col-4 form-control-sm my-2\" value=\"2562\" readonly><br>
        </div>
           </form>
           </fieldset>
     </div>";

     echo "<div class=\"col-1\">
    </div>"; // ส่วนพื้นที่ข้างหลัง ของเนื้อหาเพื่อที่จะไม่ให้ติดกับด้านข้างของข้างขวา
    echo "</div>";

?>
     </div>
</body>

</html>