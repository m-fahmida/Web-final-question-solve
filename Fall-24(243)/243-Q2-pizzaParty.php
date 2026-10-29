<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Number of Students:</label>
        <input type="number" name="students" id="" required>
        <br><br>

        <label for="">Slices per Students:</label>
        <input type="number" name="studentSlices" id="" required>
        <br><br>

        <label for="">Slices per Pizza:</label>
        <input type="number" name="pizzaSlices" id="" required>
        <br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php 
   if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $numberofstudents = $_POST["students"];
        $slicesforstudents = $_POST["studentSlices"];
        $slicesforpizza = $_POST["pizzaSlices"];
        $pizzaprice = 1050;

        $totalslicesneeded = $numberofstudents * $slicesforstudents;
        $totalpizzas = ceil(num: $totalslicesneeded / $slicesforpizza);
        $leftover = ($totalpizzas * $slicesforpizza) - $totalslicesneeded;
        $wastedmoney = ($leftover / $slicesforpizza ) * $pizzaprice;

        echo "Total Pizzas: " . $totalpizzas . "<br>";
        echo "Leftover Slices: " . $leftover . "<br>";
        echo "Wasted Money(BDT): " . $wastedmoney . "<br>";


    }
?>