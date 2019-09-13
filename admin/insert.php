<?php 
include("connection.php");
error_reporting(1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        sector <input type="text" name = "sector" value="" required/> <br><br>
        question <input type="text" name = "question" value="" required/> <br><br>
        option_a <input type="text" name = "option_a" value="" required/> <br><br>
        option_b <input type="text" name = "option_b" value="" required/> <br><br>
        option_c <input type="text" name = "option_c" value="" required/> <br><br>
        option_d <input type="text" name = "option_d" value="" required/> <br><br>
        answer <input type="text" name = "answer" value="" required/> <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>


    <?php
    if($_POST['submit']){
        $sector =$_POST['sector'];
        $question =$_POST['question'];
        $option_a =$_POST['option_a'];
        $option_b =$_POST['option_b'];
        $option_c =$_POST['option_c'];
        $option_d =$_POST['option_d'];
        $answer =$_POST['answer'];
        

        // if ($question!="" && $option_a!= "" && $option_b!= "" && $option_c!= "" && $option_d!= ""  && $answer!= ""){
        //     echo ("data inserted succesfully");
            $query = "INSERT INTO question(sector,question,option_a,option_b,option_c,option_d,answer) VALUES('$sector','$question','$option_a','$option_b','$option_c','$option_d','$answer')";
            $data = mysqli_query($conn,$query);

            if($data){
                echo ("data inserted succesfully");
            }
        // }
        // else{
        //     echo("all files required");
        // }
    }
        
    ?>
</body>
</html>