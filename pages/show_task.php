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
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-11"><h3>Update Task!!!</h3></div>
</div>
<br>
<hr>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-11">
<?php
if(!empty($data))
print utility\htmlTable::generateTableFromOneRecord($data);
?>
<hr>


<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    <div class="row"><div class="col-sm-2">Owner Email: </div><div class="col-sm-2"><input type="email" name="owneremail" value="<?php echo $data->owneremail; ?>" required ><br></div></div>
    <div class="row"><div class="col-sm-2">Owner Id: </div><div class="col-sm-2"><input type="number" name="ownerid" value="<?php echo $data->ownerid; ?>" required ><br></div></div>
    <div class="row"><div class="col-sm-2">Create Date: </div><div class="col-sm-2"><input type="text" name="createddate" value="<?php echo $data->createddate; ?>" required ><br></div></div>
    <div class="row"><div class="col-sm-2">Due Date: </div><div class="col-sm-2"><input type="text" name="duedate" value="<?php echo $data->duedate; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">Message: </div><div class="col-sm-2"><input type="text" name="message" value="<?php echo $data->message; ?>" required><br></div></div>
    <div class="row"><div class="col-sm-2">IsDone: </div><div class="col-sm-2"><input type="number" name="isdone" value="<?php echo $data->isdone; ?>" required><br></div></div>

    <input type="submit" value="Update Record">
</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
</div>
</div>
</div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>