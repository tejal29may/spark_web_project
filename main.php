<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark web development project task 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">



    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="mobile-style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <!-- <script src="index.js"></script> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <img id="web" src="sparkweb.png">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
            <!-- <span class="navbar-text active">
                <button class="btn btn-primary">Search Here</button>
            </span> -->
        </div>
    </nav>





    <div class="header">
        <center>
            <h2 class="animated zoomIn" style="animation-delay: 1s">
                Welcome To The Spark bank System
            </h2>
        </center>
    </div>


    <div class="body">
        <center><br><br>
            <div class="details">

                <button id="button1" class="btn btn-light text-light animated fadeInLeft" style="animation-delay: 2s">
                    <P id="button"><a href="users.php" >View Users</a></P>
                </button>



                <button id="button1" class="btn btn-success animated zoomIn" style="animation-delay: 2s">
                    <P id="button"><a href="transfer.php" >Transfer Money</a></P>
                </button>

                <button id="button1" class="btn btn-danger animated fadeInRight" style="animation-delay: 2s">
                    <P id="button"><a href="history.php">Transiction History</a></P>
                </button>



            </div>
            <br><br><br>



            <div class="flip-box" >
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="bank4.jpg"  alt="Paris" style="width:300px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <!-- <h2>For Any Query </h2>
                        <h3><a href="#">Click Here <br>Happy Banking</a></h3> -->
                        <img  src="sparkweb.png" alt="Paris" style="width:300px;height:200px">
                    </div>
                </div>
            </div>






        </center>


    </div>












</body>

</html>
