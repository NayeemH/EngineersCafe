<?php 
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname= "engineers_cafe";

$conn = mysqli_connect ($servernam,$username,$password,$dbname);

if($conn){
    echo("connection ok");
}

else{
    die("Connection falied because ".mysqli_connect_error());
}

?>