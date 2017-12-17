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
<div class="col-sm-1"></div>
<div class="col-sm-11"><h3>Insert New Task!!!</h3></div>

</div>
<br>
<hr>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-11">
<form action="index.php?page=tasks&action=insertTask" method="post" id="formInsert">
    <button type="submit" form="formInsert" value="insert">+ Add New Task</button>
</form>
<?php
//this is how you print something

if(!empty($data))
print utility\htmlTable::generateTableFromMultiArray($data);


?>
</div>
</div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>