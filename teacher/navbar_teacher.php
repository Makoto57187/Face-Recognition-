<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper_1_14_3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" 
    integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous"><!--การเรียกใช้ Code icon สามารถเลือกใช้ได้เลย-->
    <!--ลองไปศึกษา Javascript ดูเพราะปัจจุบันสำคัญมาก-->
    <title>Project Face Recognition</title>
</head>
<body>
<div class="container-fluid navbar navbar-expand-lg navbar-dark bg-info fixed-top">
  <nav class="navbar-nav mr-auto collapse navbar-collapse row">
              <li><a class="navbar-brand text-light col-lg-3" href="home.php">
              <i class="fas fa-bookmark"></i> Class Attendance using Face Recognition</a>
              <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
                  <span class="navbar-toggler-icon"></span>
              </button></li>
              <li class="col-lg-2"></li>
              <li class="nav-item col-lg-2"><a href="searchcourse.php" class="nav-link text-light"><i class="fas fa-search"></i> ค้นหารายวิชา</a></li>
              <li class="nav-item col-lg-2"><a href="insertsub.php" class="nav-link text-light"><i class="fas fa-plus"></i> เพิ่มรายวิชา</a></li>
              <li class="nav-item dropdown col-lg-2">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="right:0%;">
                      <img src="../img/bgimg.jpg" class="" width="38px" height="38px" style="border-radius:50%">
                      Mr.Example Lastname</a>
                  <!--dropdown-toggle เป็นคลาสของบูตสแตรป data-toggle เป้น Javascript-->
                  <div class="dropdown-menu">
                      <a href="teacher_account.php" class="dropdown-item">บัญชีผู้ใช้</a>
                      <a href="" class="dropdown-item">ออกสู่ระบบ</a>
                      <a href="" class="dropdown-item"></a>
                  </div>
              </li>
  </nav>
</div>
</body>
</html>
<?php
?>