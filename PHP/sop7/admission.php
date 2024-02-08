
<!DOCTYPE html>
<html>
<body>
<h1 align="center">Addmission Form</h1>
<form method="post">
<label>Enter Roll No of Student</label>
<input type="text" name="rollno" id="id_roll"><br><br>
<label>Enter Name of Student</label>
<input type="text" name="name" id="id_name"><br><br>
<input type="submit" name="submit" value="submit" id="submit">
</form>
</body>
</html>
<?php
$servername = "pgsql:host=localhost;dbname=student";
$username = "postgres";
$password = "laxmi";
$conn = new PDO($servername, $username, $password);

//Inserting data into the database
if (isset($_POST['submit'])) {
    $rollno = $_POST["rollno"];
    $name = $_POST["name"];

    $sql = "INSERT INTO student(rollno,name) VALUES ('" . $rollno . "'," . $name . ")";
    $conn->exec($sql);
    echo "New record added successfully";
}
?>
