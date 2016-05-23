<?php
  include 'connection.php';
  $name =  $_POST['username'];
  $password = $_POST['password'];
  $query = 'SELECT * FROM users WHERE name = "'.$name.'" and password = "'.$password.'"';
  if ($res=$con->query($query)) {
    if (mysqli_num_rows($res)>0) {
      $data = $res->fetch_array();
      session_start();
      print_r($data);
      $_SESSION['id'] = $data['id'];
      $_SESSION['name'] = $data['name'];
      $_SESSION['surname'] = $data['surname'];
      $_SESSION['username'] = $data['username'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['date'] = $data['data'];
      $_SESSION['gender'] = $data['gender'];
      $_SESSION['status'] = '1';
      header('Location:yenianasayfa.php');
      }
    }else{
      echo $con->error;
    }
?>
