<?php 
include("connection.php");
error_reporting(0);
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
        question <input type="text" name = "question" value=""/> <br><br>
        option_a <input type="text" name = "option_a" value=""/> <br><br>
        option_b <input type="text" name = "option_b" value=""/> <br><br>
        option_c <input type="text" name = "option_c" value=""/> <br><br>
        option_d <input type="text" name = "option_c" value=""/> <br><br>
        answer <input type="text" name = "answer" value=""/> <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>


    <?php
    if($_POST['submit']){
        $question =$_POST['question'];
        $option_a =$_POST['option_a'];
        $option_b =$_POST['option_b'];
        $option_c =$_POST['option_c'];
        $option_d =$_POST['option_d'];
        $answer =$_POST['answer'];

        if ($question!="" && $option_a!= "" && $option_b!= "" && $option_c!= "" && $option_d!= ""  && $answer!= ""){
            $query = "INSERT INTO question(question,option_a,option_b,option_c,option_d,answer) VALUES('$question','$option_a','$option_b','$option_c','$option_d','$answer')";
            $data = mysqli_query($conn,$query);

            if($data){
                echo ("data inserted succesfully");
            }
        }
        else{
            echo("all files required");
        }
    }
        
    ?>
</body>
</html>