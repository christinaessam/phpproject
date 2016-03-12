<?php
session_start();
require_once ("db_connect.php");


	$sharename=$_GET['name'];
	$sharesymbol=$_GET['symbol'];
	$alarmcondition=$_GET['condition'];
	$alarmvalue=$_GET['alarm_value'];

	$query =mysqli_query($borsa_db,"select share_id from shares where share_name=\"".$sharename."\"");
	if (!empty($query))
	{
		while ($row=mysqli_fetch_assoc($query)) {
		$shareid=$row['share_id'];
		}
	}
	$result = mysqli_query($borsa_db , "insert into alarms values(\"\",".$shareid.",".$_SESSION['user']['user_id'].",1,".$alarmcondition.",".$alarmvalue.",\"\")"); // function to run queries in database
	$result=mysqli_query($borsa_db,"select max(alarm_id) from alarms");
	if(!empty($result))
	{
		while ($row=mysqli_fetch_assoc($result)) {
		$alarmid=$row['max(alarm_id)'];
		}
	}
	$result=mysqli_query($borsa_db,"select share_price from shares where share_name=\"".$sharename."\"");
	if (!empty($result))
	{
		while ($row=mysqli_fetch_assoc($result)) {
		$lastprice=$row['share_price'];
		}
	}
	$result=mysqli_query($borsa_db,"select date from alarms where alarm_id=".$alarmid);
	if (!empty($result))
	{
		while ($row=mysqli_fetch_assoc($result)) {
		$date=$row['date'];
		}
	}
	$response=array('id'=>$alarmid,'lastprice'=>$lastprice,'lastdate'=>$date);
	echo json_encode($response);
?>