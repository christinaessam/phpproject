<?php
require_once ("db_connect.php");
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $status=$_REQUEST['status'];
    mysqli_query($borsa_db,"update alarms set status=$status where id=$id");
}