<?php

  $con = mysqli_connect('127.0.0.1','root','');

  if(!$con){
    echo 'Not connected to the Server';
  }

  if(!mysqli_select_db($con,'first_try'))
  {
    echo 'Database Not Selected';
  }
  $Email = $_POST['email_address'];
  if(!$Email == ""){
    $sql = "INSERT INTO person (Email) Values('$Email')";

    if (!mysqli_query($con,$sql))
    {
      echo 'Not Inserted';
    }
    Else
    {
      echo 'Inserted';
    }
    header("refresh:1; url=index.html");
  }
  else {
    echo 'This feild is empty';
  }
?>
