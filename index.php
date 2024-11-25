<?php

echo "Strādā";

// izvadi 1. lietotāju

$connection = new mysqli("localhost", "root","", "sipols");
//$sql = "SLECT * FROM users"
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc(); //assoc - tikai pirmā rindiņa, vien array

//var_dump ($data["id"]);
//echo "$data->id" . "$data->username";

// ielikt lietotāju no HTML formas

echo "<form>";
echo "</form>";
?>