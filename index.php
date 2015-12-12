<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    jQuery Added-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
<!--    scrollto jQuery Plugin Added-->
    <script src="js/jquery-scrollto.js"></script>
    
<!--    Added Typewriter plugin-->
    <script src="js/typewriter.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/typeit.min.js"></script>
<!--    Local JavaScript Added-->
    <script src="js/index.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/main.min.css" type="text/css">
   <link rel="stylesheet" href="css/typeit.min.css" type="text/css">
   
   <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <title>Welcome To WeatherBaba.com</title>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
    <div class="navbar navbar-default navbar-fixed-top">
        
        <div class="container">
           
           <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                   
               </button>
               <a href="#" class="navbar-brand">WeatherBaba.com</a>
           </div>
            
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active" id="first"><a  href="#topContainer"> Home</a></li>
                   
                    <li id="secondblock"><a href="#aboutbaba"> About Me</a></li>
                    <li id="third"><a href="#baba">Meet Me</a></li>
                    <li id="forth"><a href="#contactdev">Contact </a></li>
                </ul>
                    <p id="info">&copy; 2015-16 &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://github.com/TheLazyDev">TheLazyDev</a></p>
            </div>
            
            
        
        </div>
        
    </div>
    
    <div class="container" id="topContainer">
       
       <div class="row">
           <div class="col-md-6 col-md-offset-3" id="topRow">
         <h1 id="welcomeText">
             


         </h1>
              
               
           </div>
       </div>
        
        
    </div>
    
    
    <div class="container" id="aboutbaba">
        
        <div class="row">
            
            <u><h1 class="bold center" id="secondtext">Introduction</h1></u>
            
            <h2 id="introaboutbaba">
                
            </h2>
        </div>
    </div>
    
    
    <div class="container" id="baba">
        <div class="row">
            <button type="button" class="btn btn-success" id="button">Baba Ji Give Darshan </button>
                 
           <img src="img/baba.png" class="img-responsive"  id="toggle" alt="Responsive image">
            
            <h1 id="babajiwelcome">I am Here My Friend </h1>
            
            <h3 id="babajiwords"> Now Enter your Name and city of your choice and see my powers</h3>
            
<form class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" placeholder="For Example Jalandhar,Amritsar">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button id="predictor" type="submit" class="btn btn-success btn-lg">Click Here To Get Weather Update </button>
    </div>
  </div>
       <div class="alert alert-danger" id="failed"> My friend Please Enter a Valid City or try its old name </div>
       <div class="alert alert-success show-hide" id="msg"> </div>
       <div class="alert alert-success show-hide" id="alert">
        </div>
         <div class="alert alert-danger" id="#nocity"> My Friend Please enter a city name ! </div>
         

      
    </div>
    
    
    
</body>
</html>