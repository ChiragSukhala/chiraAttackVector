<?php
//initializing

session_start();

//login Me
if(isset($_GET['login'])){
  $_SESSION["user"] = 1;
} 

//logout me
if(isset($_GET['logout'])){
  session_destroy();
}

$login =  (isset($_SESSION["user"])) ? $_SESSION["user"] : false ; //check login


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CHIRAG SUKHALA">
    <title>Homepage | Chira Attack Vector</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">#Chira Ji</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/chiraAttack">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
    <?php if($login == false){ ?>
      <a class="nav-link" href="?login=ChiraJi">Login</a>
    <?php }else{ ?>
      <a class="nav-link" href="?logout=true">Logout</a>
    <?php } ?>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>
<?php if($login == false){ ?>
  <main role="main" class="container">
    <div class="jumbotron">
      <h1>Login Required!</h1>
      <p class="lead">Dear Hacker, This is demo of Chira Attack Vector, Please Login to access the dashboard. <br/>Credentials not required, press the login button to auto login.</p>
      <a class="btn btn-lg btn-primary" href="?login=ChiraJi" role="button">Login &raquo;</a> <br/><br/>
      <center>
      <img src="assests/images/alert.jpg" height="500px" width="500px"/></center>
    </div>
  </main>
<?php }else{ //login = true 
      if(!isset($_GET['secure']) && !isset($_GET['securest'])){ ?>
    <main role="main" class="container">
        <div class="jumbotron">
          <h1>Hey, Chira Ji!</h1>
          <p class="lead">This is your dashboard, You can see your profile picture &amp; cover picture served directly from image directory. <br/> Want Something More Secure?</p>
          <a class="btn btn-lg btn-warning" href="?secure=true" role="button">Increase Security &raquo;</a> <br/><br/>
          <center>
          <div id="cover_img" style="height:400px; width:900px; background-size: cover; background-image: url('assests/cover_picture/pacto-visual-cWOzOnSoh6Q-unsplash.jpg'); margin-bottom: 10px;"></div>
          <div id="profile_img" style="height:500px; width:450px; background-size: cover; background-image: url('assests/profile_picture/01.jpeg'); background-position: center;"></div>
          
          </center> 
      </main>
    <?php }else if(isset($_GET['secure'])) { //secure?>
      <main role="main" class="container">
        <div class="jumbotron">
          <h1>Hey, Chira Ji!</h1>
          <p class="lead">This is your secure dashboard, You can see your profile picture &amp; cover picture served directly from image controler. <br/> Want Something More Secure?</p>
          <a class="btn btn-lg btn-danger" href="?securest=true" role="button">Increase Security &raquo;</a> <br/><br/>
          <center>
          <div id="cover_img" style="height:400px; width:900px; background-size: cover; background-image: url('imageController.php?type=cover&user=1'); margin-bottom: 10px;"></div>
          <div id="profile_img" style="height:500px; width:450px; background-size: cover; background-image: url('imageController.php?type=profile&user=1'); background-position: center;"></div>
          
          </center> 
      </main>
      <?php }else { //securest?>
      <main role="main" class="container">
        <div class="jumbotron">
          <h1>Hey, Chira Ji!</h1>
          <p class="lead">This is your securest dashboard, You can see your profile picture &amp; cover picture served directly from image directory. <br/> Want Something More Secure?</p>
          <a class="btn btn-lg btn-info" href="?secure=true" role="button">Decrease Security &raquo;</a> <br/><br/>
          <center>
          <div id="cover_img" style="height:400px; width:900px; background-size: cover; background-image: url('imageController.php?type=cover'); margin-bottom: 10px;"></div>
          <div id="profile_img" style="height:500px; width:450px; background-size: cover; background-image: url('imageController.php?type=profile'); background-position: center;"></div>
          
          </center> 
      </main>
      <?php } 
    }?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
