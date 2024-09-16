<?php
  session_start(); 
require_once("connect.php");
if(isset($_POST['submit'])){
    $userName= $_POST['userName'];
    $password= $_POST['password'];

    $sql= "SELECT * FROM log_in WHERE userName='$userName' ";
    $query=mysqli_query($conn,$sql);
    $data= mysqli_num_rows($query);
    if($data > 0){       
        while($rowdata=mysqli_fetch_assoc($query)) {
          $dbuser= $rowdata['userName'];
          $dbpass= $rowdata['password'];
        }
    if($dbuser==$userName && $dbpass==$password){
        $_SESSION['userName']=$userName;
        header("location: home.php");
     }       
        else{
            header("location: signup.php");
           }
     
    }
} 
?>