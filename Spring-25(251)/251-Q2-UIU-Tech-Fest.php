<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Attendees</label>
        <input type="number" name="attendees" id="" required>
        <br><br>

        <label for="">Cost per Person</label>
        <input type="number" name="cost" id="" required>
        <br><br>

        <label for="">Venue Capacity</label>
        <input type="number" name="capacity" id="" required>
        <br><br>

        <input type="submit" value="submit">

    </form>
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $attendees = $_POST["attendees"];
        $cost = $_POST["cost"];
        $capacity = $_POST["capacity"];

        $totalvenues = ceil(num: $attendees / $capacity);
        $emptyseats = ($totalvenues * $capacity) - $attendees;
        $wastedmoney = $emptyseats * $cost;

        echo "Total Venues: " . $totalvenues . "<br>";
        echo "Empty Seat: " . $emptyseats . "<br>";
        echo "Wasted Money: " . $wastedmoney . "<br>";

    }

?>