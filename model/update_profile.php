<?php
session_start();
require_once ("db_connect.php");
$user=$_SESSION['user'];
if(isset($_REQUEST['UserEmail'])) {
    $UserEmail = $_REQUEST['UserEmail'];
    $UserPassword = $_REQUEST['UserPassword'];
    $UserName = $_REQUEST['UserName'];

if(strlen($UserPassword)==0) {
    $UserPassword=$user['user_password'];
}
    $result=mysqli_query($borsa_db,"select * from users where user_email='$UserEmail'");
    $row =mysqli_fetch_assoc($result);
if($row==null||$row['user_id']==$user['user_id']){
    mysqli_query($borsa_db,"update users set user_name='$UserName',user_email='$UserEmail',user_password=$UserPassword where user_id=$user[user_id]");
    echo "true";
}else{
    echo "false";
}

}