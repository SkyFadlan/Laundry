<?php
//koneksi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblaundry";
// Membuat Koneksi Ke Server Database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
?>