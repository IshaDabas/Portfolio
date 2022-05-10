<?php
  if(isset($_POST['btn-send'])){
      $fname = $_POST['firstName'];
      $lname = $_POST['lastName'];
      $email = $_POST['email'];
      $mobile = $_POST['mobileNo'];
      $msg = $_POST['message'];

      if(empty($fname) || empty($lname) || empty($email) || empty($mobile) || empty($msg)){
          header('location:contact.php?error');
      }
      else {
        $to = "ishadabas@icloud.com";
        if(mail($to,$mobile,$msg,$email)){
            header("location:contact.php?success");
        }
    }
  }
  else{
      header("location:contact.php");
  }
?>
