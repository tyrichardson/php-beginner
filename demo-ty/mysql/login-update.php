<?php include "db.php";
?>
<?php include "dbFunctions.php";
?>

<?php

    updateUser();
?>

<?php include "includes/header.php" ?>


<div class = "container">
<div class = "col-xs-6">
<h1 class = "text-center">Update login</h1>

<form action = "login-update.php" method = "post">

<div class = "form-group">
<label for = "username">Username</label>
<input type = "text" name = "username" class = "form-control">
</div>

<div class = "form-group">
<label for = "password">Password</label>
<input type = "text" name = "password" class = "form-control">
</div>

<div class = "form-group">
<select name = "id" id = "">

<?php

selectAllUsers();

?>
</select>
	<h6 class = "text-left">Selector is READing from the database</h6>
</div>

<input type = "submit" name = "submit" value = "Update" class = "btn btn-primary">

</form>

</div>

<?php include "includes/footer.php" ?>