<?php
  session_start(); 
require_once("connect.php");
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $Cpassword=$_POST['Cpassword'];

    $sql= "SELECT * FROM sign_up WHERE username='$username' ";
    $query=mysqli_query($conn,$sql);
    $data= mysqli_num_rows($query);
    if($data > 0){       
        while($rowdata=mysqli_fetch_assoc($query)) {
          $dbuser= $rowdata['username'];
          $dbpass= $rowdata['password'];
        }
        if(!$password=$c_password){
            echo "passwords should be the same.";
        }
    if($dbuser==$username && $dbpass==$password){
        $_SESSION['username']=$username;
        header("location: home.php");
     }       
        else{
            header("location: signup.php");
           }
     
    }
} 
?>