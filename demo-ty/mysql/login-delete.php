<?php include "db.php";
?>
<?php include "dbFunctions.php";
?>

<?php

    deleteUser();
?>

<?php include "includes/header.php" ?>
	
<div class = "container">
<div class = "col-xs-6">
<h1 class = "text-center">Delete login</h1>

<form action = "login-delete.php" method = "post">

<div class = "form-group">
<select name = "id" id = "">

<?php

selectAllUsers();

?>
</select>
<h6 class = "text-left">Selector is READing from the database</h6>
</div>

<input type = "submit" name = "submit" value = "Delete" class = "btn btn-primary">

</form>

</div>

<?php include "includes/footer.php" ?>