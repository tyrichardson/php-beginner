<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formProcess.php" method="post"> <!-- inputs become associative array upon submit -->
        <input type="text" name="username" placeholder="Enter username">
        <br />
        <input type="password" name="password" placeholder="password">
        <br />
        <input type="submit" name="submit">
        <br />
    </form>

</body>
</html>