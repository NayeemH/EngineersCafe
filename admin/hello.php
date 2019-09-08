<?php 
include("connection.php");
$query = "INSERT INTO question VALUES('1', 'what is your name','nh','ns','ny','ns','nh','1')";
$data = mysqli_query($conn,$query);

if($data){
    echo (" data inserted succesfully");
}
?>