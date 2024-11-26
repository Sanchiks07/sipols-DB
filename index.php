<?php

echo "Strādā<br><br>";

// izvadi 1. lietotāju

$connection = new mysqli("localhost", "root", "", "sipols"); //savienojas ar DB
//$sql = "SLECT * FROM users"
$result = $connection->query("SELECT * FROM users"); //dabū to ko vajag no DB
$data = $result->fetch_assoc(); //assoc - tikai pirmā rindiņa(row), viens array
print_r($data);
//var_dump ($data["id"]); - izdala tikai to, kas ir "[]" iekavās
//echo "$data->id" . "$data->username";

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

// ielikt lietotāju no HTML formas
echo "<br><br><form method='POST'>"; 
    echo "<label>Lietotājvārds: <input name='username' /></label>" . "<br><br>";
    echo "<label>Parole: <input type='password' name='password' /></label>" . "<br><br>";
    echo "<input type='submit' value='Reģistrēties' />";
echo "</form>";

?>