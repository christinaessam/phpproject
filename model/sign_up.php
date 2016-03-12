<?php
session_start();
/**
 * Created by PhpStorm.
 * User: hossam
 * Date: 12/03/16
 * Time: 02:18 م
 */
require_once ("db_connect.php");
if(isset($_REQUEST['UserEmail'])){
    $UserEmail=$_REQUEST['UserEmail'];
    $UserPassword=$_REQUEST['UserPassword'];
    $UserName=$_REQUEST['UserName'];
    if($UserName !=null && $UserPassword!=null && $UserEmail !=null){
    $result = mysqli_query($borsa_db, "select * from users where user_email='".$UserEmail."'");
    $row=mysqli_fetch_assoc($result);
    if($row===null){
        $result = mysqli_query($borsa_db, "INSERT INTO users VALUES ('','$UserName', '$UserEmail','$UserPassword')");
        $result = mysqli_query($borsa_db, "select * from users where user_email='$UserEmail'");
        $row=mysqli_fetch_assoc($result);
        $_SESSION['user']=$row;
        echo "true";
    }else{
//this email is used
        echo "false";
    }
}else{
        echo "false";
    }
}