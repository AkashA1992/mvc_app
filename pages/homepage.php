<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <?php
    include 'header.php';    
    ?> 
</head>

<body>



    
<div class="container">



<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
    <div class="row">
    
        <div class="col-sm-1"><label><b>Username</b></label></div>
        <div class="col-sm-2"><input type="text" placeholder="Enter Username" name="email" required></div>
    
    </div>
    <br>
    <div class="row">
    
        <div class="col-sm-1"><label><b>Password</b></label></div>
        <div class="col-sm-2"><input type="password" placeholder="Enter Password" name="password" required></div>
    
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <button type="submit">Login</button>
        </div>
    </div>
    </div>


</form>
<br>
<br>
<div class="row">
<h3><a href="index.php?page=accounts&action=register">Register</a></h3>
</div>


</div>


<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>



<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>