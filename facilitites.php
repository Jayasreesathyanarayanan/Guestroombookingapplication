<?php
include_once 'admin/include/class.user.php'; 
$user=new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('bg1.png');
            background-repeat: no-repeat;
            background-size:cover; 
            background-position: center;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="INDEX.HTML">Home</a></li>
                    <li class="active"><a href="facilitites.html">Room &amp; Facilities</a></li>
                    <li><a href="Book Now.html">Online Booking</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        <div class="container">
             <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4 style="color:#ffbb2b";>DUPLEX</h4><hr>
                                <h6>No of Beds: 2 Single beds</h6>
                                <h6>Facilities:AC, TV, WIFI</h6>
                                <h6>Price: Rs.1500/- tk/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href="Book Now.html"><button class='btn btn-primary button'>Book Now</button> </a>
                            </div> 
            </div>
            <div class='row'>

                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4 style="color:#ffbb2b";>FAMILY</h4><hr>
                                <h6>No of Beds: 2 double beds</h6>
                                <h6>Facilities: sofa,AC, TV, WIFI, Balcony</h6>
                                <h6>Price: Rs.1500/- tk/night.</h6>
                            </div>

                            <div class='col-md-3'>
                                <a href="Book Now.html"><button class='btn btn-primary button'>Book Now</button> </a>
                            </div> 
            </div>      
            <div class='row'>         
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4 style="color:#ffbb2b";>SUPER COMFORT</h4><hr>
                                <h6>No of Beds: 1 Double beds</h6>
                                <h6>Facilities:AC, TV, WIFI</h6>
                                <h6>Price: Rs.3500/- tk/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href="Book Now.html"><button class='btn btn-primary button'>Book Now</button> </a>
                            </div> 
            </div>
        </div>
                            
                            
                        
                    
                         

    </div>
    
    
    
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>