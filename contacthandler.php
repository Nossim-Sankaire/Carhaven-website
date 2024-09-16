<?php
require_once("connect.php");

if (isset($_POST['submit2'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $stmt = $conn->prepare("INSERT INTO contact(name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}

if (isset($_POST['delete'])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $sql = "DELETE FROM contact WHERE name = '$name' AND email = '$email'";
  $query= mysqli_query($conn,$sql);
  if($query){
      header("location: contact.php");   
  
  }
  else{
      echo "error";
  }
}

  if (isset($_POST['update'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    
    $stmt = $conn->prepare("UPDATE contact SET email=?, message=? WHERE name=?");
    $stmt->bind_param("sss", $email, $message, $name);
    if ($stmt->execute()) {
       
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
