<?php
$borsa_db=mysqli_connect("localhost","root","","borsa");
if(!$borsa_db){
    echo "db Error";
    exit();
}