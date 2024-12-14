<?php
include "koneksi.php";

header('Content-Type: application/json');

// Mendekode data JSON yang dikirim dari JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Ambil data dari formulir
$nama = $data['nama'];
$email = $data['email'];
$jumlah = $data['jumlah'];
$productName = $data['namaservis'];

// Simpan data ke tabel histori
$sql = "INSERT INTO tblpesanan (nama, email, jumlah, namaservis ) VALUES ('$nama', '$email', '$jumlah', '$productName')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => mysqli_error($conn)]);
}

// Tutup koneksi
mysqli_close($conn);
?>