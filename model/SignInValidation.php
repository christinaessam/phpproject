<?php
session_start();
 $UserEmail=$_REQUEST['UserEmail'];
 $UserPassword=$_REQUEST['UserPassword'];
 $Founded=false;
 $Matched=true;
require_once ("db_connect.php");

 if($UserEmail !==null && $UserPassword!==null)
 {
     if(preg_match('/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i',$UserEmail) && preg_match('/^[a-z0-9_-]{6,18}$/i',$UserPassword))
     {
         

   
          $Query="SELECT * FROM `users` WHERE user_email='$UserEmail' and  user_password='$UserPassword'";
          $excutetable1= mysqli_query($borsa_db,$Query);
          if(!$excutetable1)
          {
             // echo "<br>";
             // echo "the excute of Select query not work!";
              
          }
         else
         {
             $row = mysqli_fetch_array($excutetable1);
              
                if($row['user_email']===null)
                {
                    $Founded=false;
                   
                }
                 else
                 {
                     $Founded=true;
                     $_SESSION['user']=$row;
                 }
               }

     }
     else
     {
         //echo "UserEmail and UserPassword is Not  Matched";
         $Matched=false;
         
         
     }
     
     
 }
else
{
   // echo "UserEmail and UserPassword is null ";
    
}
 
$arr=array('Founded'=>$Founded,'Matched'=>$Matched);

   echo json_encode($arr);

 //$json['Result']=$Result;
//var_dump($Result);
 //echo json_encode($Result);
 




?>