<?php
function send_mail($user_info,$share_info,$alarm_id){

    $to = $user_info['mail'];
    $subject = "Borsa Alerts System";
    $message = "
<html>
<head>
<title>Borsa Alerts System</title>
<style>
p{
font-family: Dialog;
font-size: large;
}
table{
width: 650px;
height: 70px;
border:2px solid lightgray;
}
th{
background-color: darkorange;
color: white;
font-family: Granada;
font-size: large;
}
td{
background-color: darkgray;
color: white;
font-family: Granada;
font-size: large;
}
</style>
</head>
<body>
<h1>Take care of your shares</h1>
<p>Hello ".$user_info['name']."
<br>this mail was sent to you due to  to your alarm on the following share:</p>
<table border='1'>
<tr>
<th>Share symbol</th>
<th>Share Name</th>
<th>Last Price</th>
<th>Last Triggered Date</th>


</tr>
<tr>
<td>".$share_info['symbol']."</td>
<td>".$share_info['name']."</td>
<td>".$share_info['price']."</td>
<td>".date('Y-m-d h:i:s', time())."</td>
</tr>
</table>
<a href='127.0.0.1/phpproject/model/disable_alarm.php?id=".$alarm_id."&status=0'>Disable this alarm</a>

</body>
</html>
";
    $headers = "From: borsa.iti@gmail.com" . "\r\n" .
        "CC: hossam0hawary@gmail.com". "\r\n";
    $headers.= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);

}