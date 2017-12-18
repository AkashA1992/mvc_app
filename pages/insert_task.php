<?php include 'header.php'; ?>

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
<div class="col-sm-5">

<form action="index.php?page=tasks&action=save" method="post">

    <div class="row"><div class="col-sm-3">Owner Email: </div><div class="col-sm-2"><input type="email" name="owneremail" value="" required><br></div></div>
    <div class="row"><div class="col-sm-3">Owner Id: </div><div class="col-sm-2"><input type="number" name="ownerid" value="" required><br></div></div>
    <div class="row"><div class="col-sm-3">Create Date: </div><div class="col-sm-2"><input type="text" name="createddate" value="" required><br></div></div>
    <div class="row"><div class="col-sm-3">Due Date: </div><div class="col-sm-2"><input type="text" name="duedate" value="" required><br></div></div>
    <div class="row"><div class="col-sm-3">Message: </div><div class="col-sm-2"><input type="text" name="message" value="" required><br></div></div>
    <div class="row"><div class="col-sm-3">IsDone: </div><div class="col-sm-2"><input type="number" name="isdone" value="" required><br></div></div>
    <input type="submit" value="Insert Record">
</form>

</div>
</div>
</div>