<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>Movie Night</h1>

        <label for="">Attendees</label>
        <input type="number" name="attendees" id="" required>
        <br>
        <br>

        <label for="">Seat Capacity</label>
        <input type="number" name="seatCapacity" required>
        <br>
        <br>

        <label for="">Ticket Price</label>
        <input type="number" name="ticketPrice" required>
        <br><br>

        <input type="submit" value="submit">
        
    </form>
    
</body>
</html>

<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $attendees = $_POST["attendees"];
            $seatCapacity = $_POST["seatCapacity"];
            $ticketPrice = $_POST["ticketPrice"];

            $totalScreen = ceil (num: $attendees / $seatCapacity);
            $emptySeat = ($totalScreen * $seatCapacity) - $attendees;
            $wastedMoney = $emptySeat * $ticketPrice;

            echo "Total Screen: " . $totalScreen . "<br>";
            echo "Empty Seat: " . $emptySeat . "<br>";
            echo "Wasted Money: " . $wastedMoney . "<br>";

        }
?>