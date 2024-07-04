<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($email) || empty($password)) {
        echo "<script>alert('Semua kolom harus diisi!'); window.location.href = '../../views/auth/login.php';</script>";
        exit;
    }

    $sql = "SELECT * FROM tbl_pengguna WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        if ($password === $row['password']) { 
            session_start();
            $_SESSION['id_pengguna'] = $row['id_pengguna'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['role'] = $row['role'];
            header("Location:../../views/dashboard/index.php");
            exit;
        } else {
            echo "<script>alert('Password salah!'); window.location.href = '../../views/auth/login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Email tidak terdaftar!'); window.location.href = '../../views/auth/login.php';</script>";
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
<html>
    <a href="../"></a>
</html>