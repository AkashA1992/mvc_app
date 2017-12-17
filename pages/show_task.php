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
<div class="col-sm-11"><h3>Edit Task!!!</h3></div>

</div>
<br>
<hr>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-11">
<?php
print utility\htmlTable::generateTableFromOneRecord($data);
?>

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    <div class="row"><div class="col-sm-2">Owner Email: </div><div class="col-sm-2"><input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>"><br></div></div>
    <div class="row"><div class="col-sm-2">Owner Id: </div><div class="col-sm-2"><input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>"><br></div></div>
    <div class="row"><div class="col-sm-2">Create Date: </div><div class="col-sm-2"><input type="text" name="createddate" value="<?php echo $data->createddate; ?>"><br></div></div>
    <div class="row"><div class="col-sm-2">Due Date: </div><div class="col-sm-2"><input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br></div></div>
    <div class="row"><div class="col-sm-2">Message: </div><div class="col-sm-2"><input type="text" name="message" value="<?php echo $data->message; ?>"><br></div></div>
    <div class="row"><div class="col-sm-2">IsDone: </div><div class="col-sm-2"><input type="text" name="isdone" value="<?php echo $data->isdone; ?>"><br></div></div>


    <!--Owner Email: <input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>"><br>
    Owner Id: <input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>"><br>
    Create Date: <input type="text" name="createddate" value="<?php echo $data->createddate; ?>"><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br>
    Message: <input type="text" name="message" value="<?php echo $data->message; ?>"><br>
    IsDone: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>"><br>-->
    <input type="submit" value="Update Record">
</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
</div>
</div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>