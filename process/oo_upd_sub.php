<?php
//open the connection
$dept_no = $_REQUEST['dept_no'];
$dept_name = $_REQUEST['dept_name'];

$sql = "UPDATE dept1 set dept_name='$dept_name' where dept_no='$dept_no'";

//excute sql
if($mysqli->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",mysql_error();
}
?>