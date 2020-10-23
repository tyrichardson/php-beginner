<?php include "db.php" ?>
<?php include "dbFunctions.php" ?>

<?php include "includes/header.php" ?>

<div class = "container">
<div class = "col-xs-6">
<h1 class = "text-center">Read login</h1>

<pre>
<?php
readUser();
?>
</pre>

</div>

<?php include "includes/footer.php" ?>