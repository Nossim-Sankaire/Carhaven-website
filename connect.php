<?php
$hostname= "localhost";
$dbname="cathaven";
$username="root";
$password="";
$conn= new mysqli($hostname,$username,$password,$dbname); 
if($conn){
    echo "Connected to database <br>";
}
else{
    echo "Not connected to database";
}
 

?>