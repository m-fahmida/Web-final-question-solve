
<!DOCTYPE html>
<html>
<body>

    <h2>Student Form</h2>

    <form method="POST">

        <!-- Dropdown -->
        Department:
        <select name="department">
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
            <option value="English">English</option>
        </select>

        <br><br>

        <!-- Radio Button -->
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other


        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] =="POST") {

        $department = $_POST["department"];
        $gender = $_POST["gender"];

        echo "<h3>Student Information</h3>";

        echo "Department: " . $department . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
    }
    ?>

</body>
</html>
