<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Item Sold</label>
        <input type="number" name="item_sold" id="">
        <br><br>

        <label for="">Number of days run</label>
        <input type="number" name="days_run" id="">
        <br><br>

        <label for="">Target</label>
        <input type="number" name="target" id="">
        <br><br>

        <input type="submit" value="submit">

    </form>
</body>
</html>

<?php 
   if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $item_sold = $_POST["item_sold"];
        $days = $_POST["days_run"];
        $target = $_POST["target"];  

        $total_items = $days * $item_sold;

        if($total_items >= 500)
            {
                $performance = "Exellent";
            }
            elseif($total_items >= 300)
            {
                $performance = "Good";
            }

           elseif($total_items >= 150)
            {
                $performance = "Average";
            }
            else
            {
                $performance = "Poor";
            }


            if($total_items > $target)
                {
                    $diff = $total_items - $target;
                    $result = "Above target by $diff";
                }
            elseif($total_items < $target)
                {
                     $diff = $target - $total_items;
                    $result = "Below target by $diff";
                } 
            else{
                    $result = "Target met exactly (0 difference)";
            }
            
            echo "Total Items: $total_items<br>";
            echo "Performance: $performance<br>";
            echo "Result: $result<br>";
           
        
       }
?>