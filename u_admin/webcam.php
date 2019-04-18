<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper_1_14_3.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" 
    integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous">
  <!-- CSS -->
  <style>
    #my_camera{
     width: 320px;
     height: 240px;
     margin: 20px;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div class="card" style="margin-top:10%">
    <h2 class="text-center">ลงทะเบียนใบหน้านักศึกษา</h2>
  <form action="" method="">
    <div class="row">
      <div class="col-4"></div>
      <label class="col-sm-1 col-form-label-sm">รหัสนักศึกษา</label>
      <input type="text" name="sid" class="col-sm-2 form-control-sm" value="5950110021">
      <div class="col-4"></div>
    </div>
    <div class="row">
      <div class="col-4"></div>
      <label class="col-sm-1 col-form-label-sm">ชื่อ-สกุล</label>
      <input type="text" name="sname" class="col-sm-2 form-control-sm" value="เนติธร ตันติเมธานนท์">
      <div class="col-4"></div>
    </div>
    <!-- ส่วนของ Javascript ในการทำ Snapshort เก็บภาพจาก webcam -->
    <div class="row">
      <div class="col-2"></div>
      <div id="my_camera" class="col-3"></div>
          <input type= button value="ลงทะเบียนใบหน้านักศึกษา" onClick="take_snapshot()" class="col-2 btn btn-info" style="width:120px; height:50px; margin-top:120px;">
      <div id="results"  class="col-3" style="width: 320px; height: 240px; margin: 20px;"></div>
      <div class="col-2"></div>
    </div> 
  </form>
</div>
    <!-- Webcam.min.js -->
    <script type="text/javascript" src="../js/webcam.min.js"></script>
    
          <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
            Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
            });
         Webcam.attach( '#my_camera' );
    
          // <!-- Code to handle taking the snapshot and displaying it locally -->
          function take_snapshot() 
          {
     
          // take snapshot and get image data
          Webcam.snap( function(data_uri) 
              {
          // display results in page
          document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
              } );
          }
    </script>
</body>
</html>


    
    