<?php
$email = $_POST["email"];
$username = $_POST["Username"];
$psw = $_POST["psw"];
$psw_repeat = $_POST["psw_repeat"];

if(!empty($email) || !empty($username)|| !empty($psw) || !empty($psw_repeat)){
     $host = "localhost";
     $dbUsername = "root";
     $dbPassword = "";
     $dbname = "isckon";

     $conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);

     if(mysqli_connect_error()){
       die('Connect Error('. mysql_connect_errno().')'. mysql_connect_errno());
     }else{
       $
     }
}else{
  echo "ALL field are required ";
  die();
}
 ?>
