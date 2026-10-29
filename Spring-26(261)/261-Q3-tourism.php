<?php
$conn = mysqli_connect("localhost","root","","tourism");

if(!$conn)
    {
        die("Connection Error!".mysqli_connect_error());
    }

$query1 = "SELECT SpotName, Region, Rating
           from tourist_spot 
           where Rating > 4.5 OR SpotName LIKE '%Beach%'
           order by Rating DESC;";

$store = $conn->query($query1);

while($show=$store->fetch_assoc())
    {
        echo $show['SpotName'] . ": " . $show['Region'] . ": " . $show['Rating']."<br>";
    }

    $query2 = "UPDATE tourist_spot
              set Rating = Rating + 0.2 , EnteyFee = EnteyFee*0.1
              where Rating BETWEEN 4.0 AND 4.5 AND EnteyFee > 0;";

$store = $conn->query($query2);

$query3 = "SELECT Category,
       COUNT(*) AS total_spots,
       AVG(Rating) AS avg_rating,
       SUM(VisitorsPerYear) AS total_visitors
        FROM tourist_spot
        GROUP BY Category
        HAVING AVG(Rating) > 4.4
        ORDER BY avg_rating DESC;";

$store = $conn->query($query3);

while($show = $store->fetch_assoc())
{
    echo "Total spots: " . $show['total_spots'] .
         ", Avg rating: " . $show['avg_rating'] .
         ", Total visitors: " . $show['total_visitors'] . "<br>";
}
?>