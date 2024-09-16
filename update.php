<?php
require_once("connect.php");

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