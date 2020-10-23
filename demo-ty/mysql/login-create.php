<?php include "db.php" ?>
<?php include "dbFunctions.php" ?>

<?php

   createUser();
?>

<?php include "includes/header.php" ?>

<div class = "container">
<div class = "col-xs-6">
	
<h1 class="text-center">Create login</h1>

<form action = "login-create.php" method = "post">

<div class = "form-group">
<label for = "username">Username</label>
<input type = "text" name = "username" class = "form-control">
</div>

<div class = "form-group">
<label for = "password">Password</label>
<input type = "text" name = "password" class = "form-control">
</div>

<input type = "submit" name = "submit" value = "Create" class = "btn btn-primary">

</form>

</div>

<?php include "includes/footer.php" ?>