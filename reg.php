<!DOCTYPE html>
<html>
<head>
 <title>Scriptbooks|how-it-works</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="sytlesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Who we are</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="about-us.html">Team</a></li>
          </ul>
        </li>
        <li><a href="#">Partners</a></li>
        <li><a href="how-it-works.html">How it Works</a></li>
          <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
      </ul>
    </div>
  </div>
</nav>
  <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>
                Register
            </h2>

            <form action="process.php" method="post">
                <div class="form-group">

                        <label for="fname">
                            Firstname
                        </label>
                        <input type="text" name="firstname" class="form-control">

                </div>
                    <div class="form-group">

                        <label for="lname">
                            lastname
                        </label>
                        <input type="text" name="lastname" class="form-control">

                      </div>
                    <div class="form-group">

                        <label for="email">
                            E-mail
                        </label>
                        <input type="email" name="email" class="form-control">

                      </div>
                <div class="form-group">
                    <label for="username">
                        Username
                    </label>
                    <input type="text" name="username" class="form-control">
                </div>
                
               <div class="form-group">
                   <label for="password">
                       Password
                   </label>

                   <input type="password" name="password" class="form-control">
               </div>
                 <div class="form-group">
                    <label for="subno">
                     Subscription Number
                    </label>
                    <input type="text" name="subno" class="form-control">
                </div>


                <input type="submit" value="Register" class="btn btn-primary">

            </form>
        </div>
    </div>

</div>