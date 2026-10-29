<?php
 $conn = mysqli_connect("localhost","root","","uiutech_final");

  if(!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

 $query1 = "select PerformanceRating, count(EmployeeID) as total_no
            from employee_final
            group by PerformanceRating;";

 $store = $conn->query($query1); 
 
 while($show = $store->fetch_assoc())
    {
        echo $show['PerformanceRating']."--".$show['total_no']."<br>";
    }


 $query2 = "update employee_final
             set PerformanceRating = 'C'
             where Salary<40000 and PerformanceRating != 'D';";
             
 $store = $conn->query($query2);  
 
 $query3 = "update employee_final 
            set salary = salary+5000 
            where salary > 50000 and salary+5000 < 60000;";

 $store = $conn->query($query3);  

 $query4 = "select DepartmentName, count(EmployeeID) as total_emp
           from employee_final
           group by DepartmentName
           order by total_emp desc;";

           
 $store = $conn->query($query4);

  while($show = $store->fetch_assoc())
    {
        echo $show['DepartmentName']."--".$show['total_emp']."<br>";
    }


  mysqli_close($conn);
?>