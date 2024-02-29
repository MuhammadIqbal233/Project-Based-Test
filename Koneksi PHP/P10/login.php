<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users 
            WHERE email = :email AND password = :password";

$stmt = $db->prepare($query_sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    header("Location: dashboard.html");
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='index.html'>Login</a></strong></button></center>";
}
?>
