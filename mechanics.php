<?php 
    $mysqli = new mysqli("localhost", "root", "", "engineers_cafe");
    error_reporting(1);

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    else{
        // echo "ok";
    }

    $query = "SELECT * FROM question WHERE sector = 'Mechanics' ORDER BY question_id LIMIT 4 ";
    $result = $mysqli->query($query);
    

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EngineersCafe</title>
    <link rel="shortcut icon" href="img/E-3.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/script.js"></script>
</head>

<body>

    <div class="content">

        <!-- header area start from here -->
        <div class="header">
            <div class="row">
                <div class="col-md-3">
                    <div class="logoarea">
                        <a href=""><img src="img/E-2.png" alt="EngineersCafe" class="img-thumbnail"></a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="headerLeft">
                        <h3 class="float-right">Start Your Journey To reach Your Goal</h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- navigation area -->

        <div class="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><img src="img/E-3.png" class="rounded mx-auto d-block"
                        alt="EngineersCafe" width="50" height="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Engineering Content
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="automobile.php">Auto Mobile</a>
                                <a class="dropdown-item" href="me.php">Basic Mechanical Engineering</a>
                                <a class="dropdown-item" href="tharmodynamics.php">Thermodynamics</a>
                                <a class="dropdown-item" href="hydraulic.php">Hydraulic Machines</a>
                                <a class="dropdown-item" href="fluid.php">Fluid Mechanics</a>
                                <a class="dropdown-item" href="compressor.php">Compressors, Gas Turbines and Jet Engines</a>
                                <a class="dropdown-item" href="machine.php">Machine Design</a>
                                <a class="dropdown-item" href="mechanics.php">Engineering Mechanics</a>
                                <a class="dropdown-item" href="Others.php">Others</a>
                                <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> -->
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Non-Technical Content
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="english.php">English</a>
                                <a class="dropdown-item" href="bangla.php">Bangla</a>
                                <a class="dropdown-item" href="gk.php">General Knowledge</a>
                                <a class="dropdown-item" href="Others.php">Others</a>
                                <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="underconstruction.html">Interview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="underconstruction.html">Online Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="underconstruction.html">Our Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="underconstruction.html">About</a>
                        </li>


                    </ul>
                    <!-- problem to fixed in padding -->
                    <form class="form-inline my-2 my-lg-0" style="padding-left:200px ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>


        <!-- main content area -->

        <div class="main_Content">
            <div class="row">
                <div class="col-md-3">
                    <div class="jobNews">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="text-align: center; font-size : 30px">Recent Job News</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center"><a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nihil? Numquam eveniet quas iste corporis aperiam enim mollitia, voluptatibus commodi!</a></td>
                                </tr>
                                <tr>
                                <td style="text-align: center"><a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nihil? Numquam eveniet quas iste corporis aperiam enim mollitia, voluptatibus commodi!</a></td>
                                </tr>
                                <tr>
                                <td style="text-align: center"><a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nihil? Numquam eveniet quas iste corporis aperiam enim mollitia, voluptatibus commodi!</a></td>
                                </tr>
                                <tr>
                                <td style="text-align: center"><a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nihil? Numquam eveniet quas iste corporis aperiam enim mollitia, voluptatibus commodi!</a></td>
                                </tr>
                                <tr>
                                <td style="text-align: center"><a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nihil? Numquam eveniet quas iste corporis aperiam enim mollitia, voluptatibus commodi!</a></td>
                                </tr>
                                <tr>
                                <td style="text-align: center"><a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nihil? Numquam eveniet quas iste corporis aperiam enim mollitia, voluptatibus commodi!</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            <!-- fetching data from database -->
                <div class="col-md-6">
                    <div class="question border border-success">
                    <h3><a href="index.php">Home</a><a href="english.php">/Mechanics</a></h3>
                        <?php
                            while($row = $result->fetch_assoc())
                            {
                                // $question = $row['question'];
                                // $option_a = $row['option_a'];
                                // $option_b = $row['option_b'];
                                // $option_c = $row['option_c'];
                                // $option_d = $row['option_d'];
                                // $answer = $row['answer'];
                                //echo $row['question_id'].'<br>';
                                echo '<br><h4>Question:: </h4>'.$row['question'].'<br>'; ?>
                                <table class="table table-dark">
                                    <tr>
                                        <td>
                                            <?php echo '<h6>Option A: </h6>'.$row['option_a']; ?>
                                        </td>
                                        <td>
                                            <?php echo '<h6>Option B: </h6>'.$row['option_b']; ?>
                                        </td>
                                        <td>
                                            <?php echo '<h6>Option C: </h6>'.$row['option_c']; ?>
                                        </td>
                                        <td>
                                            <?php echo '<h6>Option D: </h6>'.$row['option_d']; ?>
                                        </td>
                                        
                                    </tr>
                                </table>
                                <div class="box">
                                    <a class="button" href="#popup1">Answer</a>
                                </div>

                                <div id="popup1" class="overlay">
                                    <div class="popup">
                                    <?php echo '<h2>Question:: '.$row['question'].'</h2><br>'; ?>
                                        <a class="close" href="#">&times;</a>
                                        <div class="content">
                                            <!-- <h3>Answer</h3><br> -->
                                            <?php echo '<h3>Answer:'.$row['answer'].'</h3>'; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php    
                            }
                        ?>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="sectors">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">ME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">CE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">EEE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab"
                                    aria-controls="contact1" aria-selected="false">CSE</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus fuga tenetur ut nisi
                                    temporibus, cum corporis asperiores sequi reiciendis, vero labore illo sit optio
                                    nesciunt excepturi quas et odit commodisdada!</p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus fuga tenetur ut nisi
                                    temporibus, cum corporis asperiores sequi reiciendis, vero labore illo sit optio
                                    nesciunt excepturi quas et odit commodi!</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus fuga tenetur ut nisi
                                    temporibus, cum corporis asperiores sequi reiciendis, vero labore illo sit optio
                                    nesciunt excepturi quas et odit commodi!</p>
                            </div>
                            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus fuga tenetur ut nisi
                                    temporibus, cum corporis asperiores sequi reiciendis, vero labore illo sit optio
                                    nesciunt excepturi quas et odit commodi!</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact_US">
                        <div class="icon_holder">
                            <h4 class="text-center">Contact Us</h4>
                            <div class="icons">
                                <img src="img/icon/android.png" alt="" class="img-thumbnail" height="40" width="40">
                                <img src="img/icon/fb.png" alt="" class="img-thumbnail" height="40" width="40">
                                <img src="img/icon/youtube.png" alt="" class="img-thumbnail" height="40" width="40">
                                <img src="img/icon/linkedin.png" alt="" class="img-thumbnail" height="40" width="40">
                                <img src="img/icon/twitter.png" alt="" class="img-thumbnail" height="40" width="40">
                                <img src="img/icon/google-plus.png" alt="" class="img-thumbnail" height="40" width="40">

                            </div>
                        </div>

                    </div>

                    <div class="google_Ads">
                        <img src="img/icon/google-plus.png" alt="" class="img-thumbnail" height="100" width="500">

                    </div>
                </div>
            </div>


        </div>


        <!-- footer area -->
        <div class="copyrightSection">

            <div class="col-md-12 text-center">
                <p>&copy; Copyright Nayeem Hasan 2019</p>
            </div>

        </div>




    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b0e0a43476.js"></script>


</body>

</html>