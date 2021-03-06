<?php
    include 'header.php';    
?> 
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
<div class="row">

<div class="col-sm-11"><h3>Edit Profile!!!</h3></div>

</div> 
<div class="row">   
<?php
//this is how you print something  $data contains the record that was selected on the table.
if(!empty($data))
print utility\htmlTable::generateTableFromOneRecord($data);
?>
</div>
<hr>
<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
    <div class="row"><div class="col-sm-2">First name: </div><div class="col-sm-2"><input type="text" name="fname" value="<?php echo $data->fname; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">Last name: </div><div class="col-sm-2"><input type="text" name="lname" value="<?php echo $data->lname; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">Email: </div><div class="col-sm-2"><input type="email" name="email" value="<?php echo $data->email; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">Phone: </div><div class="col-sm-2"><input type="number" name="phone" value="<?php echo $data->phone; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">Birthday: </div><div class="col-sm-2"><input type="text" name="birthday" value="<?php echo $data->birthday; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">Gender: </div><div class="col-sm-2"><input type="text" name="gender" value="<?php echo $data->gender; ?>" required><br></div></div>


    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>