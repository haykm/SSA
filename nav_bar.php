<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SSA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="logo">  
    <img src="./resource/img/logo1.jpg"  >
    
    <img src="./resource/img/big_logo1.png" id="long_logo">
</div>
<div  class="main" >    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<!--            <a class="navbar-brand" href="#">
                <img src="./resource/img/a.png" 
                     style="height: inherit; display: inline-block; margin-top: -15px"> </a>-->
        </div>
       <div class="collapse navbar-collapse" id="myNavbar">

           <ul class="nav navbar-nav" >
               <li><a class="active navbar-brand" href="#">
                 <img src="./resource/img/a.png" 
                      style="height: inherit; display: inline-block; margin-top: -15px ;"> </a> 
            </li>
            <!--<li><a class="navbar-brand" href="#"> Home </a></li>-->
            <li><a href="#">Football</a></li>
            <li><a href="#">Basketball</a></li>
            <li><a href="#">Volleyball</a></li>
            <li><a href="#">Squash</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tournaments <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Football</a></li>
                <li><a href="#">Basketball</a></li>
                <li><a href="#">Volleyball</a></li>
                <li><a href="#">Squash</a></li>
              </ul>
            </li>
            <ul style="padding: 0 25px 0 100px ; float:right; " class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container my1">
      <h3>Collapsible Navbar</h3>
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
</div>
    <div class='footer'>
        this is footer
    </div>
</body>
</html>


