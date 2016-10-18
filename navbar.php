<?php
    if(isset($_SESSION['user'])){
        $ha=1;
        $captain=$_SESSION['user'];
    }  else {
        $ha=0;
    }
    echo $ha." "."ses_u=".$_SESSION['user']." ".$captain;
?>
<div  class="" >    
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

           <ul class="nav navbar-nav " >
               <li><a class="active navbar-brand" href="index.php">
                 <img src="./resource/img/a.png" 
                      style="height: inherit; display: inline-block; margin-top: -15px ;"> </a> 
                </li>
                <!--<li><a class="navbar-brand" href="#"> Home </a></li>-->
                <li><a href="./football.php">Football</a></li>
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
           </ul>
            <ul  class="nav navbar-nav navbar-right">
                <li <?php if($ha==1) {echo "class='hidden'";} ?> ><a data-toggle="modal" data-keyboard="true" href="#" 
                       onclick="registerModal()">
                        <span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
                <li><a data-toggle="modal" data-keyboard="true" href="#" 
                       onclick="loginModal()">
                        <span class="glyphicon glyphicon-log-in"></span> Login
                    </a>
                </li>
            </ul>
          </ul>

        </div>
      </div>
    </nav>
</div>

