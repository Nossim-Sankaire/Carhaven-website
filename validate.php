<?php
require_once("connect.php");
if(isset($_POST['submit'])){
    $userName=$_POST['userName'];
    $password=$_POST['password'];

   if(empty($userName) || empty($password)){
        echo "All fields reguire to be filled";
    }
    else{
    echo "Validation successful";
    }

    $sql="INSERT INTO log_in(userName,password) VALUES('$userName','$password')";
    $query=mysqli_query($conn,$sql);
    
    if($query){
        echo ("Data inserted successfully <br>");
       }
    else{
        echo ("Data not inserted");
       }    
    
    else{
        echo ("Submission failed"); 
      }
    

}
?>