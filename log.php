<?php
session_start();
    
    $gmail=$_POST['gm'];
    $pasd=$_POST['ps'];
    include "connection.php";
    $que="SELECT * FROM reginfo WHERE mail='$gmail' AND pass='$pasd';";
    $result=mysqli_query($connection,$que);
    $num=mysqli_num_rows($result);
    if ($num>0){
      header('location:web.html');
    }
    if ($num==0);
    {
      echo"<script>alert('User Does Not Exists')</script>";
      
    }
    
    
  ?>