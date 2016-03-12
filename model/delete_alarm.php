<?php
require_once("db_connect.php");
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    mysqli_query($borsa_db,"delete from alarms where alarm_id=$id");
}