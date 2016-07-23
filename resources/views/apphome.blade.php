<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carl's Tutition</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="register">Register</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="jumbotron">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
       <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>  -->
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="upload/img-1.jpg" alt="" width="460" height="345">
		<div class="carousel-caption">
        <h3>Sample</h3>
        <p>Image</p>
      </div> 
      </div>

      <div class="item">
        <img src="upload/img-2.jpg" alt="" width="460" height="345">
      </div>
    

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>


    
  
<div class="container text-center">
  <h3>Achievements</h3><br>
  <div class="row">
    <div class="col-sm-6">
      <img src="upload/laravel.png" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
	<div class="col-sm-4">
      <div class="well">
	  <ul>
       <a href="#"><li>Our students have contributed a small part in Laravel Framework..</li> <br> </a>
	   <a href="#"><li>Laravel is one of the best frameworks in php </li> </a>
	   </ul>
      </div></div></div>
	
	<div class="row">
    <div class="col-sm-6">
      <img src="upload/data-analytics.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
	  
	  <div class="col-sm-4">
      <div class="well">
       <ul>
       <a href="#"><li>Machine Learning is the fast growing field in computer science.</li> <br> </a>
	   <a href="#"><li>Our students have Partcipated and won third place in ML in Asia contest 2k16 </li></a>
	   </ul>
      </div>
	  </div>
    </div>
  </div>
<br />

<footer class="container-fluid text-center">
  <span><a href="#">Blog</a></span> | <span><a href="#">Contact</a></span> | <span><a href="#">Mail</a></span> | <span><a href="#">Query</a></span>
  
</footer>

</body>
</html>

