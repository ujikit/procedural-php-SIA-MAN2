<?php
require_once "koneksi.php";

class User{

  private $db;
  private $connect;

  function __construct(){
    $this->db = new DB_Connection();
    $htis->connect = new $this->db->get_connection();
  }

  public function does_user_exist($username, $password){
    $query = "SELECT * from data_siswa where username_siswa='$username' and password='$password'";
    $result = mysqli_query($this->connect, $query);
    if (mysqli_num_rows($result) > 0) {
      $json['success'] = 'Welcome '.$username_siswa;
      echo json_encode($json);
      mysqli_close($this->connect);
    }
    else {
      $json['failed'] = "GAGAL!";
      echo json_encode($json);
    }
  }

}

$user = new User();
if (isset($_POST['username_siswa']) && isset($_POST['password_siswa'])) {
  $username_siswa = $_POST['username_siswa'];
  $password_siswa = $_POST['password_siswa'];

  if (!empty($username_siswa) && !empty($password_siswa)) {
    echo "Masukan Username dan Password";
  }
  else {
    echo json_encode("tes");
  }

}

?>
