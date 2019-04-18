<?php
//ส่วนของการติดต่อฐานข้อมูล
$host ="localhost";
$user ="root";
$password ="";
$dbname = "test";
// open the connection
$mysqli =new mysqli($host,$user,$password)or die("Could not connect");;

// pick the database to use
$mysqli->select_db($dbname)or die("Could not connect database");;
?>