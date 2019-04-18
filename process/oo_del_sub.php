<?php
//open the connection
require('mysql_conn.php');

$dept_no =$_REQUEST['dept_no'];
;
//Performing SQL query
$sql ="DELETE FROM dept1 where dept_no ='$dept_no'";

//execute the SQL statement

if($mysqli->query($sql)){
    echo "Record deleted!";
}
else{
    echo "Error : ",mysql_error();
}
?>