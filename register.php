<!DOCTYPE html>
<html>
<head>
 <title>Scriptbooks</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    	<script>
		$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
	</script>
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
            <li><a href="#">Team</a></li>
          </ul>
        </li>
        <li><a href="#">Partners</a></li>
        <li><a href="how-it-works.html">How it Works</a></li>
          <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<form action="process.php" method="post" role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Gurdians Details</h3>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input  name="fname" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input  name ="lname" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Phone Number</label>
                    <input  name ="num" maxlength="12" type="text" required="required" class="form-control" placeholder="Enter phone number" />
                </div>
                <div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input  name ="mail" maxlength="100" type="email" required="required" class="form-control" placeholder="Enter E-mail" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Ward Details</h3>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input name="wfname" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input name="wlname" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Enter ward's class</label>
                    <input name="wclass" maxlength="100" type="text" required="required" class="form-control" placeholder="Enter ward's class i.e basic 1-12"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <div class="form-group">
                    <label class="control-label">UserName</label>
                    <input name="uname" maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Username" />
                </div>
                <div class="form-group">
                    <label class="control-label"> Password</label>
                    <input name="password" maxlength="200" type="password" required="required" class="form-control" placeholder="password"  />
                </div>
                 <div class="form-group">
                    <label class="control-label">Repeat Password</label>
                    <input name="rpassword" maxlength="200" type="password" required="required" class="form-control" placeholder="repeat password"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Subscription card No</label>
                    <input name="sub_no" maxlength="200" type="text" required="required" class="form-control" placeholder="Subscription card no"  />
                </div>
                <input class="btn btn-success btn-lg pull-right" type="submit"/>Register Me!
            </div>
        </div>
    </div>
</form>
</div>
     <footer>
     <div class="container">
       <div class="row">
       
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <span class="logo"><img src="images/logo.png"></span>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="menu">
                         <span>Menu</span>    
                         <li>
                            <a href="#">Home</a>
                          </li>
                               
                          <li>
                             <a href="#">About</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog</a>
                          </li>
                               
                          <li>
                             <a href="#">Gallery </a>
                          </li>
                     </ul>
                </div>
           
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="address">
                        <span>Contact</span>       
                        <li>
                           <i class="fa fa-phone" aria-hidden="true"></i>Phone
                        </li>
                        <li>
                           <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                        </li> 
                        <li>
                           <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                        </li> 
                   </ul>
               </div>
           
           
           </div> 
        </div>
    </footer>
    </body>
</html>