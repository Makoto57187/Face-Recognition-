<?php
session_start();
if(empty($_REQUEST['password']) || empty($_REQUEST['username'])){
    echo "<b>Please fill Login Username and Password</b>";
    exit;
}
else {
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    $password_sha1 =md5($_REQUEST['password']);

    include ('mysql_conn.php');

    $query ="SELECT * FROM teacher where username= :bp_tusername and password= :bp_tpassword";
        $stmt =$conn->prepare($query);
        $stmt ->bindParam(':bp_tusername',$username);
        $stmt ->bindParam(':bp_tpassword',$password_sha1);

        $stmt ->execute();

        if($stmt !== false){
            $row =$stmt->fetch(PDO::FETCH_ASSOC);
            $uname = $row['fname'];
            $counter =1;

            echo "<font color ='green'><b>Welcome $uname login successfully</b></font><br>";
            //create session for login and pass
            $_SESSION['username'] = $username;
            $_SESSION['uname'] =$uname;
        }
        else {
            echo "User $tname Authentication Failed <br>";
            echo "<a href=\"login.html\">Login agian</a>";
        }
        $conn = null;
}
?>