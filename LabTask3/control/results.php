<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected successfully <br>";

$name = "";
$email = "";
$password = "";
$gender = "";
$birthday = "";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];

$sql = "INSERT INTO myinfo (name, email, password, gender, birthday) VALUES ('$name', '$email', '$password', '$gender', '$birthday')";

$res = $conn->query($sql);

if ($res) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();