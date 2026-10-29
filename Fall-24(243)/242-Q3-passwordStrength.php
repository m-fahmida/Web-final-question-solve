<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Password: </label>
        <input type="text" name="password" id="" required>
        <br><br>

        <input type="submit" value="check">
    </form>
</body>
</html>

<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $password = $_POST["password"];
    }
?>