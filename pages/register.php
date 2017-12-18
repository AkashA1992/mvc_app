<?php include 'header.php'; ?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
<div class="wrapper">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-3"><h3>Account Registration</h3></div>
</div>
<br>
<br>
<div class="row">
<div class="col-sm-1"></div>
        <div class="col-sm-3 alert">
        <label ><?php echo $data['error']; ?></label>
        </div>
    </div>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-5">

<form action="index.php?page=accounts&action=register" method="post">

    <div class="row"><div class="col-sm-3">First name: </div><div class="col-sm-2"><input type="text" name="fname" required><br></div></div>
    <div class="row"><div class="col-sm-3">Last name: </div><div class="col-sm-2"><input type="text" name="lname" required><br></div></div>
    <div class="row"><div class="col-sm-3">Email: </div><div class="col-sm-2"><input type="email" name="email" required><br></div></div>
    <div class="row"><div class="col-sm-3">Phone: </div><div class="col-sm-2"><input type="number" maxlength="10" name="phone" required><br></div></div>
    <div class="row"><div class="col-sm-3">Birthday: </div><div class="col-sm-2"><input type="text" name="birthday" required><br></div></div>
    <div class="row"><div class="col-sm-3">Gender: </div><div class="col-sm-2"><input type="text" name="gender" required><br></div></div>
    <div class="row"><div class="col-sm-3">Password: </div><div class="col-sm-2"><input type="password" name="password" required><br></div></div>
    
    <!--First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password"><br>-->
    <input type="submit" value="Submit">    
</form>

<hr>
</div>
<div style="font-size:25px;">
<a href="index.php" style="padding-left:20px;">Login Page</a>
</div>
</div>
</div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>
