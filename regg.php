<?php
session_start();
  include "connection.php";
    $uname=$_POST['fname'];
    $gmail=$_POST['lname'];
    $pasd=$_POST['psw'];
    $query="SELECT * FROM reginfo WHERE username='$uname';";
    $result=mysqli_query($connection,$query);
    $num=mysqli_num_rows($result);
    if($num>0){
      echo"<script>alert('username already exists')</script>";
    }
    else{
    $query="INSERT INTO reginfo VALUES('$uname','$gmail','$pasd');";
    mysqli_query($connection,$query);
    header('location:login.php');
    }
  
  ?>