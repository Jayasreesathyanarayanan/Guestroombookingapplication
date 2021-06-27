
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
        label{
    color: #ffbb2b;

        }
    input.transparent-input{
    background-color: transparent !important;
    border-color: orange !important;
        }
    .col-1-4{
    width:25%;
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
                    <li><a href="admin1.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class='col-md-3'></div>
                <div class='col-md-6 well'>
                    <form name="admin" action="coonection1.php" method="post" onsubmit="return validateform()">
                        <div class="form-group">
                            <h2 class="heading" ><strong style="color:#ffbb2b;"> LOGIN </strong></h2><hr>
                                    <div class="controls">
                                        <label for="Uname">USER NAME:</label>
                                        <input type="text" id="Uname" class="form-control transparent-input" name="Uname" required>
                                            
                                    </div>
                                    <div class="controls">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                        <label for="password">PASSWORD:</label>
                                        <input type="password" id="password" class="form-control transparent-input" name="password" required>
      
                                    </div>
                                    <br> <centre>        
                             <input type="submit" value="submit" class="form-control transparent-input col-1-4"  /></a></centre>
                        </div>
                    </form>
                    
                </div>
                <div class='col-md-3'></div>  
            </div>
        </div>
    </div>
    <script>  
        function validateform(){  
        var name=document.admin.Uname.value;  
        var password=document.admin.password.value;  
          
        if (Uname==null || Uname==""){  
          alert("Name can't be blank");  
          return false;  
        }else if(password.length<5){  
          alert("Password must be at least 6 characters long.");  
          return false;  
          }  
          window.location.href="add_edit.html";
        }  
        </script>  
    
    </body>
    </html>  