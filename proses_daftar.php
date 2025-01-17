<?php
session_start();
include 'koneksi.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Query untuk menyimpan data pengguna
    $sql = "INSERT INTO users (nama, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nama, $email);
    
    if ($stmt->execute()) {
        // Menyimpan ID pengguna ke dalam session
        $_SESSION['user_registered'] = true;
        $_SESSION['user_id'] = $conn->insert_id; // Ambil ID pengguna yang baru saja disimpan
        header('Location: form_input.php'); // Redirect ke form input
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
