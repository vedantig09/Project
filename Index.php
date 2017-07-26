<html>
<head>

</head>
<body>
<form action="Result.php" method="post">
    Name: <input type="text" name="name">

    E-mail: <input type="text" name="email">

    Gender:
    <input type="radio" name="gender"

           value="female">Female
    <input type="radio" name="gender"
           value="male">Male
    <input type="submit" name="submit">

</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password,"Project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/**
 * Created by PhpStorm.
 * User: Vedanti
 * Date: 26-07-2017
 * Time: 14:57
 */
?>