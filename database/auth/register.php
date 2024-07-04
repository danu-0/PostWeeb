<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "pelanggan";

    if (empty($nama) || empty($email) || empty($password)) {
        echo "<script>alert('Semua kolom harus diisi!');</script>";
        exit;
    }

    // Enkripsi password
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

   
    $sql = "SELECT * FROM tbl_pengguna WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email sudah terdaftar!');</script>";
        exit;
    }

  
    $sql = "INSERT INTO tbl_pengguna (nama, email, password, role) VALUES ('$nama', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registrasi berhasil!'); window.location.href ='../../views/auth/login.php';</script>";
        exit;
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
