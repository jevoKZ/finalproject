<?php
  include 'connection.php';
  if ($res=$con->query($query)) {
    if (mysqli_num_rows($res)>0) {
      $data = $res->fetch_array();
      session_start();
      print_r($data);
      $_SESSION['id'] = $data['id'];
      $_SESSION['firstname'] = $data['name'];
      $_SESSION['lastname'] = $data['surname'];
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['date'] = $data['date'];
      $_SESSION['gender'] = $data['gender'];
      $_SESSION['status'] = '1';
      header('Location:kayitol.html');
      }
    }else{
      echo $con->error;
    }
?>
