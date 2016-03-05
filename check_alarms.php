<?php
require_once ("db_connect.php"); //database connection
include ("send_mail.php");
//function will check if the alarm triggered or not
function check_condition($last_price,$user_price,$isApove){

    if($isApove){
        return $last_price>$user_price;
    }
    return $last_price<$user_price;
}


//select all alarms from database and check them
$result = mysqli_query($borsa_db, "select * from alarms");
while($row=mysqli_fetch_assoc($result)){
    $last_price_result = mysqli_query($borsa_db, "select price from shares where id=".$row['share_id']);
    if($row['status']){   //first see if alarm is enabled
    $last_price=mysqli_fetch_assoc($last_price_result)['price'];
if(check_condition($last_price,$row['value'],$row['condition'])){
    // here means the alarm is triggered
    //check last triggered date of this alarm

    $timestamp = strtotime($row['date']);
    $last_trig= date("d", $timestamp);
    if($last_trig==date("d")){
    }else{
        //i will send you a mail so, get user data first and share info
        $result = mysqli_query($borsa_db, "select * from users where id=".$row['user_id']);
        $user=mysqli_fetch_assoc($result);
        $result = mysqli_query($borsa_db, "select * from shares where id=".$row['share_id']);
        $share=mysqli_fetch_assoc($result);
        send_mail($user,$share); //send him a mail for this alarm
    }
    //update last triggered time anyway
     mysqli_query($borsa_db, "update alarms set date ='".date('Y-m-d h:i:s', time())."'where id=".$row['id']);

}
}
}

