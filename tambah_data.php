<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <label>Nama:</label>
    <input type="text" name="nama" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <button type="submit">Tambah</button>
</form>