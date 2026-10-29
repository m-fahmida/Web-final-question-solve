<?php
$conn = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "sundarban");

if (!$conn) {
    die("Connection failed!" . mysqli_connect_error());
}

$query1 =  "SELECT Revene, CategoryName, sum(Revene) as total_rev
            FROM sales_data
            group by CategoryName;";

$store = $conn->query($query1);

while($show = $store->fetch_assoc())
    {
        echo $show['CategoryName'] . ": " . $show['total_rev'] . "<br>";
    }

 $query2 = "update sales_data
            set CategoryName = 'Low Performing'
            where Revene < 40000;" ; 
            
 $store = $conn->query($query2);
 
 $query3 = "update sales_data
            set Revene = Revene * 0.1
            WHERE Revene > 70000;";

$store = $conn->query($query3);


$query4 = "SELECT CategoryID, COUNT(SaleID) as   total_no
from sales_data
group by CategoryID;";

$store = $conn->query($query4);

while($show = $store->fetch_assoc())
    {
        echo $show['CategoryID'] . ": " . $show['total_no'] . "<br>";
    }


mysqli_close($conn);
