<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Seed value:</label>
        <input type="number" name="seed" id="" required>
        <br><br>
        
        <label for="">Terms:</label>
        <input type="number" name="terms" id="" required>

        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $seed = $_POST["seed"];
        $terms = $_POST["terms"];
    }
?>