<?php
require_once("connect.php");
$sql= "SELECT * FROM contact";
$query=mysqli_query($conn,$sql);
$data= mysqli_num_rows($query);
if($data > 0){
    echo "There are ".$data." data entries"; 
    while($rowdata=mysqli_fetch_assoc($query)) {
        echo "<br>".$rowdata['name']." ".$rowdata['email']." ".$rowdata['message'];
    }
}
else{
    echo "No data";
}
?>