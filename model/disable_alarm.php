<?php
require_once ("db_connect.php");
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $status=$_REQUEST['status'];
    mysqli_query($borsa_db,"update alarms set status=$status where id=$id");
    ?>
    <h2>Your alarm has been disabled</h2>
    <br>
    <a href="../index.php"><button>get back to home</button></a>
<?php
}