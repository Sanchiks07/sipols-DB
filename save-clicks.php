<?php

$connection = new mysqli("localhost", "root", "", "sipols");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();
print_r($data);
echo "<br><br>";
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO  users
            (username, pass)
            VALUES
            ('$username', '$password')";
    
    $connection->query($sql);
};

header(Location: /clicker.html)