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
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>



    
<div class="row">
<div class="col-sm-4"></div>

<div class="col-sm-3">
<form action="index.php?page=accounts&action=login" method="POST" style="border:1px solid black;padding-top:20px;padding-bottom:5px;">

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
    <br>
    <br>
    <br>
    <div class="row">
        <h5>New User??? Register <a href="index.php?page=accounts&action=register"><u>here</u></a>!!!!</h5>
    </div>  
    </div>


</form>
</div>



</div>
</body>
</html>