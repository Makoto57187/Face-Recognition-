<?php
$field = $_POST['field'];
$search = '%'.$_POST['search'].'%';

require('mysql_conn.php');

$query = "SELECT*FROM dept1 WHERE $field like '$search' order by dept_no";

echo $query;

$result = $mysqli->query($query) or die("Query failed");
if($result->num_rows == 0){
    echo "Nothing to Display!!";
}
print "<table border=1>\n";

echo "<tr><th>รหัสแผนก</th><th>ชื่อแผนก</th><th colspan='2'>เลือกทำงาน</th><tr>";

while($row = $result->fetch_array()){
    echo "<tr>";
        echo "<td> ",$row["dept_no"],"</td>\n";
        echo "<td> ",$row["dept_name"],"</td>\n";
        $dept_no = $row["dept_no"];
        echo "<td><a href=\"oo_disp_dept.php?dept_no=$dept_no\">Edit</a></td\n>";

        echo "<td><a href=\"oo_del_dept.php?dept_no=$dept_no\"onclick=\"return
        confirm('Are you sure?')\">Delete</a></td\n>";
        echo"\t</tr>\n";
}
echo "</table>\n";

echo "จำนวนข้อมูลทั้งหมด :",$result->num_rows,"รายการ<br>";

$result->free_result();
$mysqli->close();

?>