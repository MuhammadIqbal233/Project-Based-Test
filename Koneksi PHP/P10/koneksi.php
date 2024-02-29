<?php
$servername = "localhost";
$database = "pendaftaran_anggota";
$username = "postgres";
$password = "admin223";
$port = "5432";

try {
    // Establishing the PDO connection
    $db = new PDO("pgsql:host=$servername;port=$port;dbname=$database;user=$username;password=$password");
    // Set PDO to throw exceptions on error
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Sudah Terhubung ke Server</h3>";
} catch (PDOException $e) {
    // If connection fails, catch and display the error message
    echo "<h3>Maaf, Server Tidak Terhubung: " . $e->getMessage() . "</h3>";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect PostgreSQL</title>
</head>
<body>
    <h3>Connect PostgreSQL</h3>
    <hr>
</body>
</html>
