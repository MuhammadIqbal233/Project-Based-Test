<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$institution = $_POST["institution"];
$email = $_POST["email"];
$password = $_POST["password"];

$servername = "localhost";
$database = "pendaftaran_anggota";
$username = "postgres";
$password = "admin223";
$port = "5432";

try {
    // Establishing the PDO connection
    $dbs = new PDO("pgsql:host=$servername;port=$port;dbname=$database;user=$username;password=$password");
    // Set PDO to throw exceptions on error
    $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Sudah Terhubung ke Server</h3>";
} catch (PDOException $e) {
    // If connection fails, catch and display the error message
    echo "<h3>Maaf, Server Tidak Terhubung: " . $e->getMessage() . "</h3>";
}


$query_sql = "INSERT INTO tbl_users (fullname, username, institution, email, password) VALUES ('$fullname', '$username', '$institution', '$email', '$password')";
$result = pg_query($dbs, $query_sql);
if ($result) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . pg_last_error($dbs);
}
?>
echo $query_sql, $dbs;
if (mysqli_query($dbs, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}

?>