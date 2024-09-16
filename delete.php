<?php 
require_once("connect.php");
if (isset($_POST['delete'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "DELETE FROM contact WHERE name = '$name' AND email = '$email'";
    $query= mysqli_query($conn,$sql)
    if($query)
        header("location: contact.php");   
    
    }
    else{
        echo "error";
    }



?>