<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname ="test";

//Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

//Create the SQL statement 
$subid =$_POST['sub_id'];
$subname =$_POST['sub_name'];
$sec =$_POST['sec'];
$term =$_POST['term'];
$year =$_POST['year'];
$sql ="INSERT INTO course(subject_ID,subject_Name,section,term,yearlearn)value('$subid','$subname','$sec','$term','$year')";

//Execute the SQL statement 
if(mysqli_query($conn,$sql)){
    echo "$sql<br>";
    echo "record added!";
}
else{
    echo "$sql <br>";
    echo "Error insert record: " .mysqli_error($conn);
}
mysqli_close($conn);
?>