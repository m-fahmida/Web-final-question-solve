<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Credits/Courses</label>
        <input type="number" name="credit" id="">
        <br><br>

        <label for="">Courses Completed</label>
        <input type="number" name="courses" id="">
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
        $credit = $_POST["credit"];
        $courses = $_POST["courses"];
        $target = $_POST["target"];

        $totalCredit = ($credit * $courses);
        if ($totalCredit >= 120 )
            {
                $progress = "Exellent";
            }
        elseif($totalCredit >= 90 )
            {
                 $progress = "Good";
            } 
        elseif( $totalCredit >= 60)
            {
                $progress = "Average";
            } 
        elseif($totalCredit < 60)
            {
                $progress = "Poor";
            }


            if($totalCredit > $target)
                {
                    $diff = $totalCredit - $target;
                    $result = "Above target by $diff";
                }
            elseif($totalCredit < $target)
                {
                     $diff = $target - $totalCredit;
                    $result = "Below target by $diff";
                } 
            else{
                    $result = "Target met exactly (0 difference)";
            }
            
            
            echo "<h3>Result</h3>";
            echo "Total Credit: $totalCredit<br>";
            echo "Progress: $progress<br>";
            echo "Result: $result<br>";

    }

?>
