<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','man2');

 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values
 $nis_siswa       = $_POST['nis_siswa'];
 $password_siswa  = $_POST['password_siswa'];

 //Creating sql query
 $sql = "SELECT * FROM data_siswa WHERE username_siswa='$nis_siswa' AND password_siswa='$password_siswa'";

 //executing query
 $result = mysqli_query($con,$sql);

 //fetching result
 $check = mysqli_fetch_array($result);

 //if we got some result
 if(isset($check)){
 //displaying success
 echo "success";
 }else{
 //displaying failure
 echo "failure";
 }
 mysqli_close($con);
 }
?>
