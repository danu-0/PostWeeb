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

    // Establish the database connection
    $database = new Database();
    $conn = $database->getConnection();

    if ($conn) {
        $sql = "SELECT * FROM tbl_pengguna WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Email sudah terdaftar!');</script>";
            $stmt->close();
            $conn->close();
            exit;
        }

        $stmt->close();

        $sql = "INSERT INTO tbl_pengguna (nama, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nama, $email, $password, $role);

        if ($stmt->execute()) {
            echo "<script>alert('Registrasi berhasil!'); window.location.href ='../../views/auth/index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $stmt->error . "');</script>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<script>alert('Koneksi ke database gagal!');</script>";
    }
}
?>