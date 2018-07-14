<?php

$host  = 'localhost';
$user  = 'root';
$pass = '';
$db    = 'man2_chatbot';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
 echo 'Terjadi Kesalahan';
}

?>
