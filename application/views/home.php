<!DOCTYPE html>
<html class="no-js">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>webstart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo $baseurl;?>/static/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo $baseurl;?>/static/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $baseurl;?>/static/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $baseurl;?>/static/css/main.css">

        <script src="<?php echo $baseurl;?>/static/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Web Start Template</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#upload"><span class="glyphicon glyphicon-cloud-upload"></span> Link1</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Link2<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#orderlist"><span class="glyphicon glyphicon-list-alt"></span> Link3</a></li>
                <li><a href="#orderview"><span class="glyphicon glyphicon-list"></span> Link4</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tasks"></span> Link5<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#placeorder"><span class="fa fa-inr"></span> Link6</a></li>
                <li><a href="#stocklist"><span class="fa fa-th-large"></span> Link7</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-users"></span> Link8<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#retailperson"><span class="fa fa-user"></span> Link9</a></li>
                <li><a href="#salesperson"><span class="glyphicon glyphicon-briefcase"></span> Link10</a></li>
                <li><a href="#repperson"><span class="fa fa-medkit"></span> Link11</a></li>
              </ul>
            </li>

            <li><a href="#notify"><span class="glyphicon glyphicon-bell"></span> Notify</a></li>
            <li class="visible-xs"><a href="#logout" style="color:red"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right hidden-xs">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">#WholeSaleName<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#settings"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                <li><a href="#changepassword"><span class="glyphicon glyphicon-pencil"></span> Change Password</a></li>
                <li class="divider"></li>
                <li><a href="#logout" style="color:red"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container-fluid" style="margin-top:20px">
    <div class="row" id="centerstage">
    </div>
      <hr>

      <footer>
        <p>&copy; WebStart <?php echo date("Y");?></p>
      </footer>
    </div> <!-- /container -->       
        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script-->
        <script src="<?php echo $baseurl;?>/static/js/libs/jquery/jquery-2.1.0.min.js"></script>
        <script src="<?php echo $baseurl;?>/static/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo $baseurl;?>/static/js/libs/underscore/underscore-min.js"></script>
        <script src="<?php echo $baseurl;?>/static/js/libs/backbone/backbone-min.js"></script>
		<script src="<?php echo $baseurl;?>/static/js/libs/backbone/typeahead.bundle.min.js"></script>
		
        <script src="<?php echo $baseurl;?>/static/js/plugins.js"></script>
        <script src="<?php echo $baseurl;?>/static/js/main.js"></script>
        
        <!--script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script-->
    </body>
</html>
