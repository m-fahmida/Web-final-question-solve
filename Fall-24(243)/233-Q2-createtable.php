<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter the value of n:</label>
        <input type="number" name="sizeoftable" id="">
        <input type="submit" value="Generate Table">
    </form>
</body>
</html>

<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $n = $_POST["sizeoftable"];

        echo "<table boarder='1' cellpadding='6' cellspacing='0' >";


        for($i=1; $i <=$n ; $i++)
            {
                echo "<tr>";

                for($j=1; $j<=$n; $j++)
                    {
                        echo "<td>" . ($i * $j) . "</td>";
                    }

                echo "</tr>";    
            }

        echo "</table>";    
    }
?>